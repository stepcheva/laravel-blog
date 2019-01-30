<?php

namespace App\Models;

use App\Scope\CurrentRevision;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'version',
        'prev_post_id',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new CurrentRevision);
    }
}
