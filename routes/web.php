<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'RumusController@index')->name('index');
Route::get('/singapore', 'RumusController@singapore')->name('singapore');
Route::get('/sydney', 'RumusController@sydney')->name('sydney');
Route::get('/hongkong', 'RumusController@hongkong')->name('hongkong');

Route::post('/singapore/proses', 'RumusController@singaporeProses')->name('sgp_proses');
Route::post('/sydney/proses', 'RumusController@sydneyProses')->name('syd_proses');
Route::post('/hongkong/proses', 'RumusController@singaporeProses')->name('hk_proses');
