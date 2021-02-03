<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    public $table="nosotros";

     public $timestamps=false;
     
     protected $fillable = [
        'titulo',
        'descripcion'
         
    ];
}
