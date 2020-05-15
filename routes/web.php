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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/abouts', 'AboutController@show')->name('abouts');
Route::get('/abouts/{id}/destroy', 'AboutController@destroy');
Route::get('/abouts/{id}/edit', 'AboutController@edit');
Route::post('/abouts/{id}/store', 'AboutController@store');
Route::get('/abouts/create', 'AboutController@create')->name('abouts.create');
Route::post('/abouts/save', 'AboutController@save')->name('abouts.save');