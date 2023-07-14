<?php

namespace App\Http\Controllers;

 use App\Models\Paper;
 use App\Models\Bottle;
use Illuminate\Support\Facades\DB;//adding for direct access in the db
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade; // ADDING THIS FOR THE INLINE BLADE TEMPLATE
use Illuminate\Support\Facades\Http; //for getting the api

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
        return $req->input(); // THIS TO GET BACK THE DATA I FILLLED JUST NOW
    }
    function directDB(){
        return DB::select('select * from bottles');
        //    return view('directDB.directDB');
    }
    // for getting data via model
    function modeldata(){
        return Bottle::all();
    }
// for getting data if model and table not same
function indirectRule(){
    return Paper::all();
}

//getting data from the api and displaying in the form
function gethttp()
{
    $takingData= Http::get("https://reqres.in/api/users?page=1 ");
    return view('HttpApi.tableapi', ["recieveData"=>$takingData['data']]);
}

//session
function sessionrequest(Request $req){
    $joMilla=$req->input('hello');
    $req ->session()->put('naaam',$joMilla);

   // below process is the same UPPER ONE IS MORE EASY

//  $joMilla= $req->input(); //storing the data of req
// $req->session()->put('naaam',$joMilla['name']);//picking out the name data here


// echo session('naaam');//printing the name data we picked out
return view("session.showingsession"); // what ever data we display in this view
}



// FLASH SESSION
function flashsubmit(Request $req){
    $data=$req->input('user');
    $req->session()->flash('good',$data);
    return redirect('flashform');
}

}
