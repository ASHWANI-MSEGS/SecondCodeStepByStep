<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ename extends Model
{
    use HasFactory;
    function companyData(){
        return $this->hasMany('App\Models\Property');
    }


}
