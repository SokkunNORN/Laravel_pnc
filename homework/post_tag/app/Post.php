<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    /**
    * relationship tap and post
    */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
