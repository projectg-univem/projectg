<?php

namespace ProjectG\Models;

use Illuminate\Database\Eloquent\Model;


class Activitie extends Model
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
