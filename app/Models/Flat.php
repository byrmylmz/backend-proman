<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $fillable=[
        'flat_name',
        'block_id',
        'user_id',
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    /**
     * get the site that owns the flat.
     */
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}

