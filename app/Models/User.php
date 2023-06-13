<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'mobile',
        'email',
        'branch',
        'hostel',
        'subjects',
        'address',
    ];

    protected $casts = [
        'subjects' => 'array',
    ];
}
