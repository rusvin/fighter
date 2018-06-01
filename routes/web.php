<?php

Route::get('/', function () {
    return view('layouts.basic');
});

Auth::routes();


Route::prefix('cabinet')->group(function () {
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/profile', 'HomeController@index')->name('profile');

        //user
        Route::resource('user', 'UserController');
    });
});
