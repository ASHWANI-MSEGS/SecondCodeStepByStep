<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class dummyApi extends Controller
{
    function getApiData(){
     return ["name"=>'Ash_kgage'];
//return "heollo0asdflsdjf";
    }
//getting from the database if no id is passed all of them will be called
function getApiDB($id=null ){
    return $id?Property::find($id):Property::all();// $key?Property::find($key):
}
// function getApiDB(Property $key=null){
//     return $key?Property::find($key):Property::all();// $key?Property::find($key):
// }


// adding data in the database
function addApi(Request $req){
    $pro = new Property;
     $pro->name=$req->name;
     $pro->ename_id=$req->ename_id;
   $check= $pro->save();
if($check)
  {
    return ["result"=>"done"];
  }
else {
    return ["result"=>"done not done"];
}
}
// update from the database
function updateApi(Request $req){
    $pro = Property::find($req->id);
    $pro->name=$req->name;
    $pro->ename_id=$req->ename_id;
   $check= $pro->save();
   if($check)
   {
    return ['result'=>"done"];
   }
   else{
    return ['result'=>"not so done"];
   }
}
function deleteApi($id){
$pro =Property::find($id);
$check=$data = $pro->delete();
if($check)
{
 return ['result'=>"deleted"];
}
else{
 return ['result'=>"not deleted"];
}
}











}