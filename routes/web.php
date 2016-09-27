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



Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', 'HomeController@index');
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('logout', 'Auth\LoginController@logout');
    //Route for category
    Route::resource('categories', 'CategoryController');
});
Auth::routes();
