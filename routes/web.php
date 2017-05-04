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
    return view('welcome');
});

Route::get('/inicioadmin', function () {
    return view('Admin.index');
});

Route::get('/inicio', 'UserController@index');
Route::get('/user', 'UserController@create')->name('user');
Route::group(['prefix'=>'user'],function(){
	Route::resource('users','UserController');
	//Ruta de eliminar
	/*Route::get('categories/{id}/destroy',[
		'uses'=>'CategoryController@destroy',
		'as'=>'admin.categories.destroy'
		]);*/
});

Route::get('/login', function () {
    return view('Template/login');
});

Route::get('/admin', function () {
    return view('Template/admin');
});
Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
	//Route::resource('users','UserController');
	Route::resource('categories','CategoryController');
	//Ruta de eliminar
	Route::get('categories/{id}/destroy',[
		'uses'=>'CategoryController@destroy',
		'as'=>'admin.categories.destroy'
		]);
	Route::resource('words','WordController');
	//Ruta de eliminar
	Route::get('words/{id}/destroy',[
		'uses'=>'WordController@destroy',
		'as'=>'admin.words.destroy'
		]);
	Route::resource('videos','VideoController');
	//Ruta de eliminar
	Route::get('videos/{id}/destroy',[
		'uses'=>'VideoController@destroy',
		'as'=>'admin.videos.destroy'
		]);
});
/*Route::group(['prefix'=>'usuarios'],function(){
	
	Route::get('view/{id}',[
		'uses'=>'UsuarioController@view',
		'as'=>'usuariosView'
		]);

});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
