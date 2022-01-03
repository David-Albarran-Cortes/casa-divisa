<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\showpostsmodel;
use Illuminate\Http\Request;

class showPostsController extends Controller
{
     
    
    public function index()
    {
         
        $respuesta = Http::get('https://s3.amazonaws.com/dolartoday/data.json');
        $dolar = $respuesta->json();
        return view('welcome' , compact('dolar'));
 
    }

}
