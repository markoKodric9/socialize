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
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('index', 'HomeController@index')->name('index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/news-feed', 'DashboardController@newsfeed');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile/{username}', 'DashboardController@profile');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/messenger', 'DashboardController@messenger');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/weather', 'DashboardController@weather');
});