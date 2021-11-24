<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable=[
        'site_name',
        'user_id'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];

    /**
     * Get the flats for the site
     */

     public function blocks()
     {
         return $this->hasMany(Block::class);
     }


}
