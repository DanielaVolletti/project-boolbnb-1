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
    return view('index');
});


Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Messages/showMessages{id}', 'MessagesController@showMessages')->name('showMessages');
Route::get('/Messages/createMessage{id}', 'MessagesController@createMessage')->name('createMessage');
Route::post('/Messages/storeMessage{id}', 'MessagesController@storeMessage')->name('storeMessage');
