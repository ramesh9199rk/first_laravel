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
Route::get('/demo/{name}/{id?}',function($name,$id=null){
   // echo "hello world!";
   //return view('demo');
//    echo $name ." ";
//    echo $id;
$data =compact('name','id');
//print_r($data);
return view ('welcome')->with($data);
});
// Route :: post('/test',function(){
// echo "hello post method!";
// });
Route:: any('/test',function(){
    echo "This is a test!";
});
