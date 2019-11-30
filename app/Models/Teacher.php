<?php

namespace ProjectG\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;

    protected $table = 'teachers';

    protected $guard = 'teacher';

    protected $fillable = [
        'ra', 'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
