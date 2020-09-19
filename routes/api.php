<?php

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get("/",function (){
    return "Helló";
});
Route::get("/list",function (){
    return Ad::all();
});
Route::get("/list/{item}",function (Ad $item){
    return $item;
});
Route::post("/list/create",function(Request $request){
    $ad = new Ad;
    $ad->description = $request->description;
    $ad->payment = $request->payment;
    $ad->name = $request->name;
    $ad->save();

    return $ad;
});
Route::post("/list/remove/",function (Request $request){
    Ad::destroy($request->id);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
