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

Route::group(['prefix' => 'admin'], function() {
	Route::get('dashboard', function() {
		return view('admin.dashboard');
	});

	Route::group(['prefix' => 'category'], function() {
		Route::get('list', ['as' => 'admin.category.getList', 'uses' => 'CategoryController@getList']);
		Route::get('insert', ['as' => 'admin.category.getInsert', 'uses' => 'CategoryController@getInsert']);
		Route::post('insert', ['as' => 'admin.category.postInsert', 'uses' => 'CategoryController@postInsert']);
		Route::get('update/{id}', ['as' => 'admin.category.getUpdate', 'uses' => 'CategoryController@getUpdate']);
		Route::post('update/{id}', ['as' => 'admin.category.postUpdate', 'uses' => 'CategoryController@postUpdate']);
		Route::get('delete/{id}', ['as' => 'admin.category.getDelete', 'uses' => 'CategoryController@getDelete']);
	});
});
