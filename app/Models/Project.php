<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'vendor',
        'slice',
        'error_log_url',
        'logo',
        'description',
        'authenticate',
        'domain',
        'admin_domain',
        'api_domain',
        'git_url',
        'api_git_url',
        'admin_git_url',
        'technology',
        'api_technology',
        'admin_technology',
        'start_date',
        'api_start_date',
        'admin_start_date',
        'end_date',
        'api_end_date',
        'admin_end_date',
        'complete',
    ];
}
