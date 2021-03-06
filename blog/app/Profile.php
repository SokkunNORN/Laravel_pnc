<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'user_id',
        'phone',
        'address'
    ]; 

    /**
     * one to one relationship user and profile
     * profile belongs to a user
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
