<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable=[
        'block_name',
        'sites_id',
        'users_id'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

}
