<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'name',
    ];

    /**
     * relationship post and tag
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
