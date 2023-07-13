<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade; // ADDING THIS FOR THE INLINE BLADE TEMPLATE
class Mycontroller extends Controller
{
    //inline blade
    public function inlinef(){
        $totalPeople=20;
       return Blade::render('<h1> there is about {{$total }} </h1>',['total'=>$totalPeople]);
    }
    // for the user form and req is for getting back what was entered
    function getData(Request $req){
         $req->validate(
            [   'username'=>"required|min:3",
                'password'=>'required']
         );
        return $req->input(); // THIS TO GET BACCK THE DATA I FILLLED JUST NOW
    }


}
