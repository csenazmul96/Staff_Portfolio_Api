<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    protected $fillable = [
        'user_id',
        'from_date',
        'to_date',
        'total_day_leave',
        'status',
        'description',
        'document',
        'type',
        'note',
        'approve',
    ];
}
