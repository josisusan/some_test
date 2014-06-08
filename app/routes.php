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

// Route::get('/', function()
// {
// 	//return View::make('hello');
//   return View::make("welcome");
// });

Route::get('/users/register', array('as' => 'register_user', 'uses' => 'UsersController@getRegister'));
Route::get('/users/login', array('as'=> 'login', 'uses' => 'UsersController@getLogin'));
Route::resource('users', 'UsersController');

// Route::get('/users/register', function(){
//   return 'hello world';
// });
