<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    public $table="oficinas";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'articulo'
         
    ];
}
