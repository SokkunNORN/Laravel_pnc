<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'province'
    ];

    /**
     *relationship between student and teacher
     */
    public function teachers() {
        return $this->belongsToMany('Teacher');
    }
}
