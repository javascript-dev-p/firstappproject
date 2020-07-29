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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/users/photoshow', 'UsersController@photoshow')->name('users.photoshow');
    Route::get('/users/videoshow', 'UsersController@videoshow')->name('users.videoshow');
    Route::resource('/users', 'UsersController');

    Route::resource('/posts', 'PostsController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
