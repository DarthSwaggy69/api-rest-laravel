<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    protected $fillable = [
        'name',
        'phone',
        'email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
