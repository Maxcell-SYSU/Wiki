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



Route::auth();

Route::get('/', function () {
    return view('home');
});

Route::get('/done', function () {
    return view('home');
});

Route::resource('information', 'InformationController');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
});
