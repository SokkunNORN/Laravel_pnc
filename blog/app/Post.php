<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    /**
     * has relationship with user
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * relationship tap and post
     */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
