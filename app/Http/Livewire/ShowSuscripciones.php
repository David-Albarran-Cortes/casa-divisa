<?php

namespace App\Http\Livewire;

use App\Models\Suscripciones;
use Livewire\WithPagination;

use Livewire\Component;

class ShowSuscripciones extends Component

{
    use WithPagination;

    public $search ;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc']
    ];
    public function mount()
    {
        $this->suscripciones = new Suscripciones();
    }
    public function updatingSearch(){
        $this->resetPage();
     }
 

    //esta propiedad escuchara el evento llamado render
    protected $listeners = ['render' , 'delete'];



    public function render()
    {
        

        $suscripciones = Suscripciones::where('id',  'like', '%' . $this->search . '%')
            ->orwhere('suscripcion', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->orwhere('created_at', 'like', '%' . $this->search . '%')
            ->paginate($this->cant);

        return view('livewire.show-suscripciones', compact('suscripciones'));
    }
    
    public function order($sort)
    {

        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {

                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }

        
    }


    public function delete(Suscripciones $suscripciones){
        $suscripciones->delete();
      }
}
