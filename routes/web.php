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

Route::get('categories', 'BookController@index');
Route::get('titles', 'TitleController@index');
Route::get('search', 'TitleController@search');
Route::get('search/{id}', 'BookController@show');