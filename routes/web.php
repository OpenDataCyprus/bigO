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

/* Authorize with github */

Route::get('/auth/github','AuthController@redirectToProvider');
Route::get('/auth/github/callback','AuthController@handleProviderCallback');

Route::get('/','HomeController@index');
Auth::routes();

<<<<<<< HEAD
Route::get('/home', 'HomeController@index');
Route::get('/details', 'HomeController@details');
=======
Route::get('/home', 'DashboardController@index');
>>>>>>> feature/auth
