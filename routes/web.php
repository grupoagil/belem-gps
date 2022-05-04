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

Route::get('/', 'PublicController@index')->name('index');
Route::get('produtos', 'PublicController@produtos')->name('produtos');


Route::group(['prefix' => 'admin'], function () {
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/home', 'HomeController@index')->name('admin.home');
		Route::get('produtos','ProdutosController@index')->name('admin.produtos');
		Route::post('produtos/cadastrar','ProdutosController@cadastrar')->name('admin.produtos.cadastrar');
		Route::post('produtos/{id}/atualizar','ProdutosController@atualizar')->name('admin.produtos.atualizar');
		Route::get('produtos/{id}/','ProdutosController@apagar')->name('admin.produtos.apagar');
		Route::get('produtos/{id}/visibilidade','ProdutosController@visibilidade')->name('admin.produtos.visibilidade');
	});
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
