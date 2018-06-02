<?php

Route::get('/', function () {
    return view('layouts.basic');
});

Auth::routes();


Route::prefix('cabinet')->group(function () {
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/profile', 'UserController@showProfile')->name('user-profile');

        //user
        Route::resource('user', 'UserController');
        Route::post('/user/update-password', 'UserController@updatePassword')->name('user.update-password');
        Route::post('/user/update-avatar', 'UserController@updateAvatar')->name('user.update-avatar');
    });
});
