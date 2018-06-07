<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', 'AdminController@index');
Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@edit');

Route::group(['middleware' => 'user.role'], function()
{
    Route::get('/hotel', 'HotelController@index');
    Route::post('/hotel', 'HotelController@add');
    Route::get('/hotel/user', 'HotelController@userHotels');
    Route::post('/hotel/complite', 'HotelController@complite');
    Route::get('display-search-queries','HotelController@searchData');
});

Route::group(['middleware' => 'admin.role'], function()
{
    Route::get('/user', 'UserController@index');
    Route::post('/user', 'UserController@store');
    Route::get('/dell', 'UserController@dell');
    Route::post('/dell', 'UserController@dell');
    Route::get('/hotels', 'HotelController@showHotels');
});






