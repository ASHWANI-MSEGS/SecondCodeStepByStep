<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// for url
//first url
Route::get('/urlfirst' ,function() {
return view('url.urlfirst');
}
);
//second url
Route::get('/urlsecond' ,function() {
$data=['hosue','jute','good','sdfasd', 'asdddddd','logic'];
    return view('url.urlsecond', ['trying'=>$data]);    }
);

//inline blade template
Route::get('/inline',[Mycontroller::class,'inlinef']);

//for forms
Route::view('userform', 'form.form');
Route::post('/submitform',[Mycontroller::class,'getData']);


// global middleware
Route::view('globalguard','middleware.global.globalguard');
Route::view('globalmiddle','middleware.global.globalmiddle');

//grouped middleware
Route::view('groupedthird','middleware.grouped.groupedthird');
// grouped route
Route::group(['middleware'=>['protectedByAsh']],function(){
    Route::view('groupedfirst','middleware.grouped.groupedfirst');
    Route::view('groupedsecond','middleware.grouped.groupedsecond');
});

//routed middleware
Route::view('routefirst',"middleware.routed.routefirst")->middleware('protectedByAsh');
Route::view('routesecond',"middleware.routed.routesecond")->middleware('protectedByAsh');
Route::view('routethird',"middleware.routed.routethird")->middleware('protectedByAsh');

// direct accessing of db
Route::get('directDB',[Mycontroller::class,'directDB']);

//data accessing via db
Route::get('indirectaccess',[Mycontroller::class,'modeldata']);
//data accessing in case model and table name not same
Route::get('indirectrule',[Mycontroller::class,'indirectRule']);

// http requests
Route::get('gethttp',[Mycontroller::class,'gethttp']);

// session
//Route::view('getsessionform','session.sessionform');
Route::post('sessionrequest',[Mycontroller::class,'sessionrequest']);
Route::view('showingsession',"session.showingsession");
Route::get("/getsessionform",function(){
    //this is if they are logged in they will be logged out and redirect
      if(session()->has('naaam')){
        return redirect("showingsession");
      }
   return view('session.sessionform');
  });
//LOGOUT INSIDE THE SESSION
Route::get("/logoutSession",function(){
  //this is if they are logged in they will be logged out and redirect
    if(session()->has('naaam')){
        session()->pull('naaam');
    }
 return redirect('getsessionform');
});

//FLASH SESSION
Route::view('flashform',"flashsession.flashform");
Route::post('flashsubmit',[Mycontroller::class,'flashsubmit']);

//upload a file
Route::view('fileupload',"fileupload.fileupload");
Route::post('fileuploaded',[Mycontroller::class,'fileuploaded']);

//show list from the database table
Route::get('showfromdata',[Mycontroller::class,'showfromdata']);

//delete a record from a database table
Route::get('deletena/{id}',[Mycontroller::class,'deletena']);
//edit a record from a database table
Route::get('editna/{id}',[Mycontroller::class,'editna']);
//save afer update
Route::get('saveAfterUpdate',[Mycontroller::class,'saveAfterUpdate']);

// save data in database
Route::view('getsavedatadb','crud.getsavedatadb');
Route::post('savedatadb',[Mycontroller::class,'savedatadb']);


// show data 2
Route::get("show2",[Mycontroller::class,'show2']);
//delte
Route::get('delete2/{id}',[Mycontroller::class,'delete2']);
//edit
Route::get("edit2/{id}",[Mycontroller::class,'edit2']);
// after edit
//Route::put("/update22",[Mycontroller::class,'update2']);
Route::post("/update22",[Mycontroller::class,'update2']);

// accessors
Route::get("accessors",[Mycontroller::class,'accessors']);

