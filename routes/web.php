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
    return view('/index');
});

Route::get('register', function () {
    return view('/register');
});

Route::get('login', function () {
    return view('/login');
});


Route::get('contact', function () {
    return view('/contact');
});

Route::get('index', function () {
    return view('/index');
});

Route::get('product_details', function () {
    return view('/product_details');
});

Route::get('products', function () {
    return view('/products');
});

Route::get('special_offer', function () {
    return view('/special_offer');
});

Route::get('components', function () {
    return view('/components');
});

Route::get('voucher', function () {
    return view('/voucher');
});


Route::get('master',function(){
  return view('layouts.master');
});

Route::get('/profile', 'UserController@index');
// Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('/info', 'InfoController@index');
Route::get('/info', function () {
  						$books = ['book1', 'book2', 'book3', 'book4', 'book5'];
   						 return view('info',compact('books'));
});

Route::get('manage-vue', 'VuePromotionController@manageVue');
Route::resource('vuepromotions','VuePromotionController');


Route::get('all', function () {
    return view('book.show');
});
Route::get('product_details',function(){
  return view('/product_details');
});
Route::get('product_details/{id}','ProductController@show');
Route::get('borrow','BorrowController@show');
Route::get('categories', 'BookController@index');
Route::get('titles', 'TitleController@index');
Route::get('search', 'TitleController@search');
Route::get('index', 'ProductController@index');
Route::get('/product_details/{id}','ProductController@show');
// Route::get('all', 'TitleController');
