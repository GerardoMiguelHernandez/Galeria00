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
    return view('galeria.template');
});
Route::get('admin/users/index','UsersController@index');

Route::group(['prefix' => 'admin'],function(){
Route::post('categoria/store','CategoryController@store');
Route::get('categoria/create','CategoryController@create');
Route::get('categoria/index','CategoryController@index');
Route::post('logout','Auth\LoginController@log0ut');
Route::get('login','Auth\LoginController@get_login');
Route::post('login','Auth\LoginController@autenticate');
Route::get('register','Auth\RegisterController@get_register');
Route::post('post_register','Auth\RegisterController@store');

Route::get('categoria/{id}/destroy',[
	'uses' => 'CategoryController@destroy',
	'as' => 'admin.categoria.destroy']);

Route::get('users/{id}/destroy',[
	'uses' => 'UsersController@destroy',
	'as' => 'admin.users.destroy']);
});






Auth::routes();

Route::get('/home', 'HomeController@index');
