<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('phuongnt', function () {
    #return view('welcome');
    echo "hello_word";
});
Route::get('home1', function () {
    return view('home');
});
Route::get('index', function () {
    return view('Admin.layout.index1');
});

Route::get('login_page',function(){
	return view ('Admin.layout.login');
});
Route::get('register_page',function(){
    return view ('Admin.layout.register');
});
Route::get('product_page',function(){
    return view ('Admin.layout.product_admin');
});
Route::get('edit_product_page',function(){
    return view('Admin.layout.edit_product');
});
Route::get('list_product_page',function(){
    return view('Admin.layout.list_product');
});
Route::get('add_user_page',function(){
    return view('Admin.layout.add_User');
});
Route::get('edit_user_page',function(){
    return view('Admin.layout.edit_user');
});
Route::post('login',AuthoController@login)->name('login');