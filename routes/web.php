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

Route::get('/',
	function ()
	{
		return view('welcome');
	});

Route::get('/{cetegory}','UserController@showAll')->name('category'); //Показывает всех пользователей в категории
Route::get('/{category}/{id}','UserController@showUser')->name('user'); //Показывает конкретного пользователя в категории
Route::post('/add_user','UserController@addUser')->name('adduser'); //Добавляет пользователя

/*Route::group(['prefix'=>'user'],
	function()
	{
		Route::get('/model/{id}','UserController@getModel');
		Route::get('/photografer/{id}','UserController@getPhotografer');
		Route::get('/studio/{id}','UserController@getStudio');

	});
*/

Route::group(['prefix'=>'admin'],
	function()
	{
		Route::get('/','Admin\AdminController@index');  //Обработчик админки
	});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

