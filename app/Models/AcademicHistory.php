<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicHistory extends Model
{
    protected $fillable = [
        'institute_name',
        'degree_name',
        'department',
        'location',
        'from_date',
        'to_date',
        'continue',
        'description',
        'result',
        'public_status',
    ];
}
