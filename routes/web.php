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
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {;
    Route::resource('Instansi','InstansiController');
    Route::resource('mou','mouController');
});
Auth::routes();
Route::get('wes','frontendController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('gust/{id}', 'frontendController@index')->name('guest');
     