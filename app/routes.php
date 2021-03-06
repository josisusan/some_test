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
Route::get('/', function()
{
  return View::make("welcome");
});
*/

Route::get('/', array('as'=> 'index', 'uses' => 'PagesController@index'));

Route::get('/users/register', array('as' => 'register_user', 'uses' => 'UsersController@getRegister'));
Route::get('/users/login', array('as'=> 'login', 'uses' => 'SessionsController@getLogin'));
Route::post('/users/login', array('as'=>'postLogin', 'uses' => 'SessionsController@postLogin'));
Route::get('/users/logout', array('as' => 'logout', 'uses' => 'SessionsController@getLogOut'));
Route::resource('users', 'UsersController');
