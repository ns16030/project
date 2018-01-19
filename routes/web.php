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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'PageController@events');
Route::get('/master', 'PageController@master');
Route::get('/training', 'PageController@training');
Route::get('/', 'PageController@events');
Route::get('oneclass/{id}', 'PageController@onemasterclass');
Route::get('oneevent/{id}', 'PageController@oneevent');

Route::post('/comments/{id}', 'PageController@writeComment');