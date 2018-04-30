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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin login page
Route::prefix('admin')->group(function (){
	// Admin login page
	Route::get('/login', [
		'uses' => 'PageController@getAdminLogin',
		'as' => 'admin.login'
	]);

	// Admin login
	Route::post('/login', [
		'uses' => 'Auth\AdminLoginController@login',
		'as' => 'admin.login'
	]);

	// Admin Dashboard
	Route::get('/home', [
		'uses' => 'AdminController@index',
		'as' => 'admin.home'
	]);
});