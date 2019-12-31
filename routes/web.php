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
    return view('layouts.cadre');
});



Route::get('/3', function () {
    return view('welcome');
});


Route::get('/register2', function () {
    return view('.auth.register2');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/activate/{code}', 'ActivationController@activation')->name('user.activation');
Route::get('/resend/code', 'ActivationController@coderesend')->name('code.resend');

