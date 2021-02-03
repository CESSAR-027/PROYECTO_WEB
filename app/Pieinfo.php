<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieinfo extends Model
{
    public $table="pieinfos";

     public $timestamps=false;
     
     protected $fillable = [
        'dato',
        'info',
        'ruta'
         
    ];
}
