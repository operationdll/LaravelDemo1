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

Route::get('/login','admin\LoginController@index');

Route::any('/register','admin\LoginController@register');

Route::post('/login','admin\LoginController@login');

Route::get('/signout','admin\LoginController@signout');

Route::any('/password','admin\LoginController@password');