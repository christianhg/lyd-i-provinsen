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
/*
Route::get('/', 'PostController@showNewest');

Route::get('/dashboard', 'DashboardController@showIndex');
*/
Route::get('/', function()
{
	return View::make('post', array('post' => Post::take(1)->get()));
});