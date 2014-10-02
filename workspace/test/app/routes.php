<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('Hello_World/', function()
{
	return 'Hello World';
});

Route::get('Bonjour/', 'UserController@showProfile');
Route::get('test2/', 'Test@index');

Route::get('test/{param}', function($param)
{
	return View::make('testView')->with('param', $param);
});
