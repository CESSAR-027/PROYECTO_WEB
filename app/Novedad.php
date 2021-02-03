<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    public $table="novedades";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'objeto'
         
    ];
}
