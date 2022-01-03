<?php

namespace App\Http\Livewire;
use App\Models\Suscripciones;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ShowSuscripciones;

class CreateSub extends Component
{

    
    public $open = false;
    public $suscripcion ;

    protected $listeners = ['render' , 'delete'];

    //empesamos a craer las validaciones
    protected $rules = [
        'suscripcion' => 'required|min:12|max:64|email|unique:suscripciones',
         

    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        
    }

    public function save()
    {
        
        


        $this->validate();

        Suscripciones::create([
            'suscripcion' => $this->suscripcion,
             
        ]);



        //resetear el modal
        $this->reset(['open', 'suscripcion' ]);
        //crearemos un evento 
        $this->emitTo('show-suscripciones', 'render');
        $this->emit('alert', 'Suscripción exitosa. Recibiras nuestras actualizaciones   ');
    }


    public function render()
    {
        return view('livewire.create-sub')->with('info' ,'El post se actualizo con exito');;
    }
}
