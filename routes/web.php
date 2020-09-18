<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@index');
//Route::get('/contact','HomeController@show');
//Route::get('/', [HomeController::class, 'index']);
Route::get('/posts/show/{id}','HomeController@show')->name('single_post');
Route::get('post/{id}','HomeController@delete');
