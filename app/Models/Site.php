<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable=[
        'site_name',
        'users_id'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];


}