<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Auth::routes();
Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');

    // management company
    Route::get('/company/list', 'CompanyController@index')->name('company.list');
    Route::get('/company/create', 'CompanyController@create')->name('company.create');
    Route::post('/company/store', 'CompanyController@store')->name('company.store');

    // management employe
    Route::get('/company/list', 'CompanyController@index')->name('employe.list');
    Route::get('/company/list', 'CompanyController@index')->name('employe.create');
});