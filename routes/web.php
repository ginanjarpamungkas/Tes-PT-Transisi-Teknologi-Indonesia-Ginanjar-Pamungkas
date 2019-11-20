<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
