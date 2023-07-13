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