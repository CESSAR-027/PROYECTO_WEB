<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papeleria extends Model
{
     public $table="papelerias";

     public $timestamps=false;
     
     protected $fillable = [
        'icono',
        'articulo'
         
    ];
}
