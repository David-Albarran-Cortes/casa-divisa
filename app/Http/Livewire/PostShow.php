<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;
use Livewire\Component;

class PostShow extends Component
{  
     
    use WithPagination;
    public $view = "list";
    public $cant= '3';
    public function render()
    {
        $respuesta = Http::get('https://s3.amazonaws.com/dolartoday/data.json');
        $dolar = $respuesta->json();
        
        return view('livewire.post-show', compact('dolar'));
    }
}
