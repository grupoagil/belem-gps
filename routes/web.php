<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

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
    return redirect()->route('login');
});

Route::get('/home', 'HomeController@index')->name('admin.home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('produtos','ProdutosController@index')->name('admin.produtos');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::post('registro', 'UserController@registro')->name('user.registro');
	Route::post('update', 'UserController@update')->name('user.update');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
});
