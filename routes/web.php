<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('painel')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'Student\UserController@getDashboard')->name('get.user.dashboard');
        
    });
});

Route::prefix('professor')->group(function() {
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('get.teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('post.teacher.login');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/', 'Teacher\TeacherController@getDashboard')->name('get.teacher.dashboard');
    });
});
