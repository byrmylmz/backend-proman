<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable=[
        'person_name',
        'users_id'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
