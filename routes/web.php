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
    return view('home');
});
Route::get('/login','AuthController@login')->name('login'); 
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/pelanggan','PelangganController@index');
    Route::POST('/pelanggan/create','PelangganController@create');
    Route::get('/pelanggan/{id}/edit','PelangganController@edit');
    Route::POST('/pelanggan/{id}/update','PelangganController@update');
    Route::get('/pelanggan/{id}/delete','PelangganController@delete');
    Route::get('/pelanggan/{id}/profile','PelangganController@profile');
    
});
    