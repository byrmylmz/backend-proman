<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $fillable=[
        'flat_name',
        'blocks_id',
        'users_id',
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}

