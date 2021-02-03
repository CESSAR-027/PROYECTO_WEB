<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto1 extends Model
{
    public $table="contactos1";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'dato'
         
    ];
}
