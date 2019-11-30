<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('professor')->group(function() {
    Route::get('/entrar', 'Auth\TeacherLoginController@showLoginForm')->name('get.teacher.login');
    Route::post('/entrar', 'Auth\TeacherLoginController@login')->name('post.teacher.login');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/', 'Teacher\TeacherController@getDashboard')->name('get.teacher.dashboard');
    });
});
