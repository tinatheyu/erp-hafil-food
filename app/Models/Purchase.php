<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $table = 'purchases';
    protected $fillable = [
        'employee_id',
        'purchase_date',
        'total',
        'status',
    ];
}
