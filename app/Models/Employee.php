<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'cin',
        'birth_date',
        'start_date',
        'exit_date',
        'address',
        'salary',
        'phone',
        'email',
        'job_title_id'
    ];
}
