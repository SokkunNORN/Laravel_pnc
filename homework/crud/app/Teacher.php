<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'province'
    ];

    /**
     * relationship between student and teacher
     */

    public function students() {
        return $this->belongsToMany('Student');
    }
}
