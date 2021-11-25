<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable=[
        'block_name',
        'site_id',
        'user_id'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];

    /**
     * Get the site that owns the block
     */

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    /**
     * Get the flats for the block.
     */

     public function flats()
     {
         return $this->hasMany(Flat::class);
     }

}
