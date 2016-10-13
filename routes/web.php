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
    Route::get('index-datatable', 'CategoryController@indexDatatable');
    //Route Datatable
    Route::get('datatables/{type}', 'DatatableController@getData')
        ->where('type', 'category');
    Route::resource('users', 'UsersController');
    //download csv
    Route::get('csv/{type}', 'CsvController@downloadCsv')->name('getCsv');
    //Route for news model
    Route::resource('news', 'NewsController');
    //Route for comment model
    Route::resource('comments', 'CommentController', ['except' => ['show']]);
    //Route for reply comment
    Route::resource('reply-comments', 'ReplyCommentController', ['except' => ['show']]);
});
Auth::routes();
