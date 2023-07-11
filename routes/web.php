<?php

use Illuminate\Support\Facades\Route;

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

//components


