<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    public $table="people";// this is used when the table and model is of different names
    
    // for converting it into capital letters
    function getNameAttribute($value){
        $title = ucfirst($value).", what";//ucfirst($value) will capitalize the first letter of the name) .what is just concatinate
        return ($title);
    }
   
    
}
