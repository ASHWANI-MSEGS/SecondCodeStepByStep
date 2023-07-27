<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public $timestamps=false;
    function setNameAttribute($value){
        //name of functioin
                return $this->attributes['name']='Mr '.$value;
             }
}
