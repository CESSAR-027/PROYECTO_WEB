<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suministro extends Model
{
    public $table="suministros";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'objeto'
         
    ];
}
