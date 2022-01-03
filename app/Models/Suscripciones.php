<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Suscripciones extends Model
{
    use HasFactory;
    
    //habiltar asigncion masiva 
    protected $fillable = ['suscripcion','updated_at','created_at'];
}
