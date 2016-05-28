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

Route::get('img-upload', 'ImagesController@upload');
Route::post('img-upload', 'ImagesController@store');
Route::get('images', 'ImagesController@show');

Route::get('/', function () {
    return view('welcome');
});
