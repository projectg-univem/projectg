<?php

namespace ProjectG\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;

    protected $guard = 'teacher';

    protected $table = 'teachers';

    protected $fillable = [
        'ra', 'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
