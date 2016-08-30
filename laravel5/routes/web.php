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
Route::get('schema/create',function(){
	Schema::create('db_laravel',function($table){
		$table->increments('id');
		$table->string('username');
        $table->string('password');
        $table->timestamps();
	});
});