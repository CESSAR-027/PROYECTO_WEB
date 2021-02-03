<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public $table="menus";

     public $timestamps=false;
     
     protected $fillable = [
        'titulo', 
        'ruta',
        'orden' 
         
    ];
}
