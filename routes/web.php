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
Route::get('/', function(){
    return view('index');
})->name('index');

Route::get('/quienes_somos', function(){
    return view('quienes_somos');
})->name('quienes_somos');

Route::get('nuestros_servicios', function(){
    return view('nuestros_servicios');
})->name('nuestros_servicios');

Route::get('nuestros_planes', function(){
    return view('nuestros_planes');
})->name('nuestros_planes');

Route::get('contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('login', function(){
    return view('login');
})->name('login');

Auth::routes();
Route::get('/administrador/home', 'AdminController@index')->name('home');
