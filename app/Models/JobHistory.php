<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    protected $fillable = [
        'company_name',
        'designation',
        'location',
        'from_date',
        'to_date',
        'continue',
        'description',
        'public_status',
    ];
}
