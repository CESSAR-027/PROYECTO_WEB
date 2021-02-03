<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titleproducto extends Model
{
    public $table="titleproductos";

     public $timestamps=false;
     
     protected $fillable = [
        'titulo' 
         
    ];
}
