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

Route::get('/admin/home', function () {
    return view('admin1.template_admin');
});

//Ruta para vista principal
//Route::get('Bienvenido','WelcomeController@index');

Route::get('/','WelcomeController@index');

Route::get('take','WelcomeController@Hola');

Route::get('admin/users/index','UsersController@index');

Route::group(['prefix' => 'admin'],function(){
Route::post('categoria/store','CategoryController@store');
Route::get('categoria/create','CategoryController@create');
Route::get('categoria/index','CategoryController@index');




 Route::post('/logout','Auth\LoginController@logOut');
 /*
Route::get('login','Auth\LoginController@get_login');
Route::post('login','Auth\LoginController@autenticate');
Route::get('register','Auth\RegisterController@get_register');
Route::post('post_register','Auth\RegisterController@store'); */

Route::get('categoria/{id}/destroy',[
	'uses' => 'CategoryController@destroy',
	'as' => 'admin.categoria.destroy']);
Route::resource('users','UsersController');

Route::post('users/{user}/update',[
	'uses' => 'UsersController@update',
	'as' => 'admin.users.update']);

Route::post('categorias/{id}/update',[
	'uses' => 'CategoryController@update',
	'as' => 'admin.categorias.update']);

Route::post('centros/{centro}',[
	'uses' => 'Works_centers@update',
	'as' => 'admin.centros.update']);
Route::get('eventos/{id}/destroy',[
	'uses' => 'Events@destroy',
	'as' => 'admin.eventos.destroy']);

Route::get('centros/{id}/destroy',[
	'uses' => 'Works_centers@destroy',
	'as' => 'admin.centros.destroy']);

Route::get('users/{id}/destroy',[
	'uses' => 'UsersController@destroy',
	'as' => 'admin.users.destroy']);

Route::get('users/{id}/edit',[
	'uses' => 'UsersController@edit',
	'as' => 'admin.users.edit']);


//rutas para centros de trabajo
       Route::resource('categorias','CategoryController');
Route::resource('centros','Works_centers');
Route::resource('eventos','Events');
Route::resource('imagenes','ImagesController');
Route::post('centros/store','Works_centers@store');
Route::post('admin/eventos','Events@store');





});






Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
