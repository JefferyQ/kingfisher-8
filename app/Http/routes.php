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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


Route::get('define-template', 
  ['as' => 'define-template', 'uses' => 'templateController@create']);

Route::post('create-template', 
  ['as' => 'create-template', 'uses' => 'templateController@store']);


Route::get('get-template', 
  ['as' => 'define/template', 'uses' => 'templateController@getTemplate']);

Route::post('execute-template', 
  ['as' => 'execute-template', 'uses' => 'templateController@executeTemplate']);


Route::get('getPdf', 
  ['as' => 'getPdf', 'uses' => 'templateController@getPdf']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'

]);
