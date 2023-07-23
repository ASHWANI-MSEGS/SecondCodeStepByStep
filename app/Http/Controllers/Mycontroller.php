<?php

namespace App\Http\Controllers;

 use App\Models\Paper;  // these are the model
 use App\Models\Bottle; // these are the model
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
        $directData= DB::table('bottles')
->get();
        return $directData;
 //->where('id',22)->delete();
//->where('id',22)
// ->update([ 'name'=>'anger']);

// ->insert(['name'=>'ion' ] );
        //  ->find(6);
        // ->count();
        //->where('name',"king") ->get();
     // return  view('Query Builder.query',['directData'=>$directData]);
       // return DB::select('select * from bottles');
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
    $joMilla=$req->input('name');
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

//fileupload
function fileuploaded(Request $req){
// echo "<pre>";
//print_r($req->all());
//return   $req->input();
echo $req->file('fileupload')->store('docs');
// $gttingTheFileBack= $req->file( 'fileupload');
// return $gttingTheFileBack=$req->fileupload;
//  return $gttingTheFileBack;
}

// show list from the database table
function showfromdata(){
    //$atta=Bottle::where('name','king')->get();// for getting a specific data in the database
    $atta=Bottle::paginate(5);
    return view('crud.showdb',['roti'=>$atta]);
}
// deleting from database
function deletena($id)
{
    $datadelete = Bottle::find($id);
    $datadelete->delete();
    return redirect('showfromdata');
}
//editing from database
function editna($id){
    $editable= Bottle::find($id);
    return view('crud.editdatadb',['editable'=>$editable]);
}
// updating the data
function saveAfterUpdate(Request $req)
{

    return $req->all();
    //  $update= Bottle::find($req->id);
    //  $update->name=$req->name;
    //  $update->save();
    //  return redirect('showfromdata');
}


// saving the data in the database
function savedatadb(Request $req){
    $bottle = new Bottle;//model name
    $bottle ->name=$req->name;//adding data to the column
    $bottle->save();
    return redirect('getsavedatadb');
}

function show2(){
// return Bottle::all();
// this will show all the data
   // $showdata2 = Bottle::all();'
// pagination
$showdata2 = Bottle::all();
    return view('crud2.showdata',['showdata'=>$showdata2 ]);
}
//delete
function delete2($id){
$delete2 = Bottle::find($id);
$delete2->delete();
return redirect("show2")->with("message", " id $id record deleted");
}
//edit
function edit2($id)
{
    $edit2 = Bottle::find($id);
    return view('crud2.edit2',['edit2'=>$edit2]);
}
//update
function update2(Request $req){
   // $data= new Bottle;
    $data=Bottle::find($req->id);
    $data->name=$req->name;
    $data->save();
    return redirect("show2");
}

// aggregates Queries


}
