<?php

namespace App\Http\Livewire;
use App\Models\Suscripciones;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowPosts extends Component
{
     
    public function render()
    {

        $suscripciones = Suscripciones::all();

        $respuesta = Http::get('https://s3.amazonaws.com/dolartoday/data.json');
        $dolar = $respuesta->json();
        return view('livewire.show-posts' , compact('dolar','suscripciones'));
    }
}
