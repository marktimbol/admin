<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth:admin'], function()
{
	Route::get('/', 'Dashboard\DashboardController@index');
	Route::resource('pages', 'Dashboard\PagesController');
});