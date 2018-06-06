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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('/owners', 'OwnerDetailsController@index');
Route::get('/flees/upload_house_details', 'HouseDetailsController@upload_house_details');
Route::get('/flees/{id}', 'HouseDetailsController@display');
Route::get('/flees', 'HouseDetailsController@store_house_details');

