<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    use HasFactory;
    public $timestamps=false;
    function getNameAttribute($value){
 // the function name should be in that format get(name according to db)Attribute
        return ucfirst($value." how are you");
        //ucfirst will capitalize the first name and also quotes will add stuffs
    }
}
