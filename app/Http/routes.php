<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('login', ['uses'=>'Auth\AuthController@getLogin', 'as'=>'login']);
Route::post('login', ['uses'=>'Auth\AuthController@postLogin', 'as'=>'login']);
Route::get('logout', ['uses'=>'Auth\AuthController@getLogout', 'as'=>'login']);

// Registration routes...
Route::get('registro', ['uses'=>'Auth\AuthController@getRegister', 'as'=>'registro']);
Route::post('registro', ['uses'=>'Auth\AuthController@postRegister', 'as'=>'registro']);

Route::get('app',['middleware'=>'auth','uses'=>'ToDoController@index', 'as'=>'todoApp']);

//Register API
Route::group(array('prefix'=>'api/v1'), function(){
	Route::put('new', ['middleware'=>'auth','uses'=>'ToDoController@store', 'as'=>'todoApp']);
});