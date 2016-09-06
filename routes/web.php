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
Route::get('home','UsersController@index');

Route::group(['prefix' => 'admin'],function(){



Route::get('login','Auth\LoginController@get_login');
Route::get('register','Auth\RegisterController@get_register');
Route::post('post_register','Auth\RegisterController@store');

Route::resource('user','UsersController');
});



Auth::routes();

Route::get('/home', 'HomeController@index');