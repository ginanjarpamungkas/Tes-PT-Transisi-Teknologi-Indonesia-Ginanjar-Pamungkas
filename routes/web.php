<?php

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');

    // management company
    Route::get('/company/list', 'CompanyController@index')->name('company.list');
    Route::get('/company/create', 'CompanyController@create')->name('company.create');
    Route::post('/company/store', 'CompanyController@store')->name('company.store');
    Route::get('/company/edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::post('/company/update/{id}', 'CompanyController@update')->name('company.update');
    Route::get('/company/delete/{id}', 'CompanyController@destroy')->name('company.delete');

    // management employe
    Route::get('/employe/list', 'EmployeController@index')->name('employe.list');
    Route::get('/employe/create', 'EmployeController@create')->name('employe.create');
    Route::post('/employe/store', 'EmployeController@store')->name('employe.store');
    Route::get('/employe/edit/{id}', 'EmployeController@edit')->name('employe.edit');
    Route::post('/employe/update/{id}', 'EmployeController@update')->name('employe.update');
    Route::get('/employe/delete/{id}', 'EmployeController@destroy')->name('employe.delete');
});