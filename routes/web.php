<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\mainController@main');

Route::get('/registration', 'App\Http\Controllers\mainController@registration');

Route::post('/registration/reg', 'App\Http\Controllers\mainController@reg');

Route::get('/maps', 'App\Http\Controllers\mainController@maps');

Route::get('/traders', 'App\Http\Controllers\mainController@traders');

Route::get('/login', 'App\Http\Controllers\mainController@login');

Route::post('/login/log', 'App\Http\Controllers\mainController@log');

Route::get('/logout', 'App\Http\Controllers\mainController@logout');
