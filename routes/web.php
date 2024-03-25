<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('superheroes', 'SuperheroeController@index')->name('superheroes.index');
Route::get('superheroes/create', 'SuperheroeController@create')->name('superheroes.create');
Route::post('superheroes', 'SuperheroeController@store')->name('superheroes.store');
Route::get('superheroes/{superheroe}', 'SuperheroeController@show')->name('superheroes.show');
Route::get('superheroes/{superheroe}/edit', 'SuperheroeController@edit')->name('superheroes.edit');
Route::put('superheroes/{superheroe}', 'SuperheroeController@update')->name('superheroes.update');
Route::delete('superheroes/{superheroe}', 'SuperheroeController@destroy')->name('superheroes.destroy');
