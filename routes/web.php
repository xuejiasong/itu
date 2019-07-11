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
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

Route::group(['middleware' => 'check.login'], function() {
	Route::get('/', function () {
		return view('home.index');
	})->name('root');

	Route::get('lawList/index', function () {
		return view('lawList.index');
	})->name('lawList.index');

	Route::get('lawList/show', function () {
		return view('lawList.show');
	})->name('lawList.show');

	Route::get('lawList/edit', function () {
		return view('lawList.edit');
	})->name('lawList.edit');
});

