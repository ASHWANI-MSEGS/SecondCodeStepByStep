<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Validator;

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

function searchApi($naming){
 // return Keyboard::where('name',$naming)->get();// this for searching the exact word
 $data= Keyboard::where('name','LIKE', '%'.$naming."%")->get();// this for searching words similar to it
 if(count($data)==0){
   return ["Messege"=>"no Data Found"];
 }
 else{
   return ["Messege"=>"  Data Found"];
 }
}

function validateApi(Request $req)
{
 $rules = array("ename_id"=>"required");
$validatorr = Validator::make($req->all(),$rules);
if($validatorr->fails())
{
    return $validatorr->errors();
}
else{
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
    return ["a"=>'x'];
}



 










}