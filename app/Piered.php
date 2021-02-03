<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piered extends Model
{
    public $table="pieredes";

     public $timestamps=false;
     
     protected $fillable = [
        'ruta',
        'icono',
        'red'
         
    ];
}
