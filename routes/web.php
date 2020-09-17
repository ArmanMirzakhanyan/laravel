<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/contact', function () {
    return view('contact');
});
//Route::get('/post/{id}', function ($id) {
//    return view('post')->with('id',$id);
//});
Route::get('/post/{slug?}', function ($slug=null) {
    echo 'optional'.$slug;
    //return view('post')->with('id',$id);
});
Route::match(['get', 'post'], '/category', function () {
    echo "rasslabsya";
});
Route::redirect('/here', '/contact', 301);
