<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/acv',function (){
   return 'hello eva';
});
route::get('/acvv',function (){
   return 'I love you';
});
route::get('/eva','\App\Http\Controllers\PostController@index');
route::get('/login','\App\Http\Controllers\PostController@index');
route::get('/home','\App\Http\Controllers\PostController@home');
include_once("admin.php");
