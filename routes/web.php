<?php

Auth::routes();

Route::get('/', function () {
	return view('index');
})->name('home');

Route::get('/construct', function () {
    return view('construct');
})->name('construct');

Route::prefix('aluno')->group(function () {
    Route::middleware('auth:student')->group(function () {
        Route::get('/', 'Student\StudentController@getDashboard')->name('get.student.dashboard');
        Route::get('/tarefas', 'Student\StudentController@getTasks')->name('get.student.tasks');
        Route::get('/perfil', 'Student\StudentController@getProfile')->name('get.student.profile');
        Route::get('/calendario', 'Student\StudentController@getCalendar')->name('get.student.calendar');
        Route::get('/tarefas/grupo', 'Student\StudentController@getTaskGrupo')->name('get.student.taskGrupo');
        Route::get('/relatorios', 'Student\StudentController@getReports')->name('get.student.reports');
        Route::get('/duvidas', 'Student\StudentController@getQuestions')->name('get.student.questions');
        Route::get('/conquest', 'Student\StudentController@getConquest')->name('get.student.conquest');

        Route::get('/sair', function () {
            Auth::logout();
            return redirect()->route('home');
        })->name('get.student.logout');
    });
});

Route::prefix('professor')->group(function() {
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('get.teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('post.teacher.login');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/relatorios/grupo', 'Teacher\TeacherController@getReportsGrupo')->name('get.teacher.reportsGrupo');
        Route::get('/relatorios/individual', 'Teacher\TeacherController@getReportsIndiv')->name('get.teacher.reportsIndiv');
        Route::get('/relatorios', 'Teacher\TeacherController@getReports')->name('get.teacher.reports');
        Route::get('/', 'Teacher\TeacherController@getDashboard')->name('get.teacher.dashboard');
        Route::get('/tarefas', 'Teacher\TeacherController@getTasks')->name('get.teacher.tasks');
        Route::get('/tarefas/modelo', 'Teacher\TeacherController@getTaskModelo')->name('get.teacher.getTaskModelo');
        Route::get('/tarefas/modelo/grupo', 'Teacher\TeacherController@getTaskGrupo')->name('get.teacher.getTaskGrupo');
        Route::get('/tarefas/criar', 'Teacher\TeacherController@getTaskCreate')->name('get.teacher.getTaskCreate');

        // Profile
        Route::get('/perfil', 'Teacher\TeacherController@getProfile')->name('get.teacher.profile');
        Route::put('/perfil', 'Teacher\TeacherController@updateProfile')->name('put.teacher.profile');
        Route::get('/duvidas', 'Teacher\TeacherController@getQuestions')->name('get.teacher.questions');
        Route::get('/calendario', 'Teacher\TeacherController@getCalendar')->name('get.teacher.calendar');

        Route::get('/sair', function () {
            Auth::guard('teacher')->logout();
            return redirect()->route('home');
        })->name('get.teacher.logout');
    });
});

Route::prefix('administrador')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('get.admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('post.admin.login');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', 'Admin\AdminController@getDashboard')->name('get.admin.dashboard');

        Route::get('/sair', function () {
            Auth::guard('admin')->logout();
            return redirect()->route('home');
        })->name('get.admin.logout');
    });


});
