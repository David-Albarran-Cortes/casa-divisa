<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
 use Livewire\Component;
 use App\Models\Suscripciones;
use Livewire\WithFileUploads;
 
class SubscribeShow extends Component
{

    public $open = false;
    public $suscripción;

     //empesamos a craer las validaciones
     protected $rules = [
        'suscripcion' => 'required ',
         
    ];


    public function save()
    {

        $this->validate();

        Suscripciones::create([
            'suscripcion' => $this->suscripción,
        ]);

         
        $this->emitTo('subscribe-show', 'render');
        $this->reset(['suscripcion']);
        $this->emit('alert', 'El suscripto  con exito');
    }

    public function render()
    {
        return view('livewire.subscribe-show');
    }
}
