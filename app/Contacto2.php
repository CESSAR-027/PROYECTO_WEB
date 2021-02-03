<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto2 extends Model
{
    public $table="contactos2";

     public $timestamps=false;
     
     protected $fillable = [
        'icono','dato'
         
    ];
}
