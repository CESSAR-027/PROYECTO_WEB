<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impresion extends Model
{
    public $table="impresiones";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'objeto'
         
    ];
}
