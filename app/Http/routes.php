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

Route::get('/welcome', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::get('/welcome/register', 'WelcomeController@register');
Route::post('/welcome/register', 'WelcomeController@store');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

/*----------------------------------------------------------------------------------------------------------------------------
 *~~~~~~~~~~~~~~~~ Login / Logout ~~~~~~~~~~~~~~~~~~~~~~~~
 *---------------------------------------------------------------------------------------------------------------------------*/
//  /*          Views       */
// Route::get('/login', 'Auth\AuthController@getLogin');
// Route::get('/logout', 'Auth\AuthController@getLogout');
//
// /*        Requests       */
// Route::post('/login', 'Auth\AuthController@postLogin');
