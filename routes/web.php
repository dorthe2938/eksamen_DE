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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{newsletter}/{user}/unsubscribe', 'NewsletterController@unsubscribe');
Route::get('/home/{user}/edit', 'UserController@edit');
Route::post('/home/{user}', 'UserController@update');
Route::get('/home/{user}/delete', 'UserController@destroy');
Route::get('/home/{user}/birthday', 'UserController@birthday');