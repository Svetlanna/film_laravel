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
Route::get('/', 'FilmController@getinfo');

Route::get('film/', 'FilmController@index');
Route::get('film/create', 'FilmController@create')->name('film.create');
Route::get('film/{film}', 'FilmController@show')->name('film.show');
Route::get('category/film/{film}', 'FilmController@removeCategory')->name('category.film.delete');




Route::get('film/create', 'FilmController@create')->name('film.create');
Route::get('film/{film}', 'FilmController@show')->name('film.show');
//Route::get('category/{id}', 'FilmController@catshow');
Route::get('/showcat/{id}', 'FilmController@showcat')->name('showcat');
