<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

}
