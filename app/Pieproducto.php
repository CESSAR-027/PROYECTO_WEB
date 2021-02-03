<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieproducto extends Model
{
    public $table="pieproductos";

     public $timestamps=false;
     
     protected $fillable = [
        'ruta',
        'nombre'
         
    ];
}
