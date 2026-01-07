<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'phone',
        'position',
        'salary',
        'status',
    ];
}
