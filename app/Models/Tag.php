<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'description',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
