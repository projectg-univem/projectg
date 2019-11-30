<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('aluno')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'Student\StudentController@getDashboard')->name('get.student.dashboard');

        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->route('login');
        });
    });
});

Route::prefix('professor')->group(function() {
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('get.teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('post.teacher.login');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/', 'Teacher\TeacherController@getDashboard')->name('get.teacher.dashboard');
        Route::get('/tarefas', 'Teacher\TeacherController@getTasks')->name('get.teacher.tasks');
        

        Route::get('/logout', function () {
            Auth::guard('teacher')->logout();
            return redirect()->route('get.teacher.login');
        })->name('get.teacher.logout');
    });
});
