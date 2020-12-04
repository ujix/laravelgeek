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



Route::get('/', 'SiswaController@index')->name('home');
Route::get('/tambah-siswa', 'SiswaController@create')->name('create');
Route::post('/tambah-siswa', 'SiswaController@store')->name('store');
Route::get('/edit/{id}', 'SiswaController@edit')->name('edit');
Route::post('/update/{id}', 'SiswaController@update')->name('update');
Route::delete('/delete/{id}', 'SiswaController@delete')->name('delete');
