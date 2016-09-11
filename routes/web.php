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
Route::get('/lists', 'HomeController@lists');
Route::get('/weather', 'HomeController@weather');
=======
Route::get('/details', 'HomeController@details');

Route::get('/home', 'DashboardController@index');
>>>>>>> f3372f650194f306c4449f1d863e2b2c01f711c6
