<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get api
Route::get('getApiData',[dummyApi::class,'getApiData']);
// getting api from the database
Route::get('getApiDB/{id?}',[dummyApi::class,'getApiDB']);
//getting api from the database for name
//Route::get('getApiDB/{key:name?}',[dummyApi::class,'getApiDB']);

// adding data in the database
Route::get('addApi',[dummyApi::class,'addApi']);

// updating/put in the database  // updateApi/{id} can be used but no
// need to keep id=9 in the sending testpage
Route::put('updateApi/{id}',[dummyApi::class,'updateApi']);
//delete in the databaseR
Route::delete('deleteApi/{id}',[dummyApi::class,'deleteApi']);




