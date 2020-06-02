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
Route::get('/', 'daoController@home')->name('/');
Route::get('quienes_somos', 'daoController@quienes_somos')->name('quienes_somos');
Route::get('nuestros_servicios', 'daoController@nuestros_servicios')->name('nuestros_servicios');
Route::get('nuestros_planes', 'daoController@nuestros_planes')->name('nuestros_planes');
Route::get('contacto', 'daoController@contacto')->name('contacto');