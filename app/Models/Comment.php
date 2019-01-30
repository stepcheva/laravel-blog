<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
        'user_id',
        'post_id',
        'is_approved',
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function scopeIsApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
