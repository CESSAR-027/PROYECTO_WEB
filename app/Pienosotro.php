<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pienosotro extends Model
{
   public $table="pienosotros";

     public $timestamps=false;
     
     protected $fillable = [
        'descripcion'
         
    ];
}
