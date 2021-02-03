<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    public $table="titulos";

     public $timestamps=false;
     
     protected $fillable = [
        'titulo',
        'descripcion'
         
    ];
}
