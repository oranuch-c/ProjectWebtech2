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
    return view('home');
});
Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('/info', 'InfoController@index');
Route::get('/info', function () {
  						$books = ['book1', 'book2', 'book3', 'book4', 'book5'];
   						 return view('info',compact('books'));
});
