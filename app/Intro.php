<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    public $table="intros";

     public $timestamps=false;
     
     protected $fillable = [
        'introduccion' 
         
    ];
}
