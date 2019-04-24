<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    static function last() {
        // return DB::table('Comment')->orderBy('id', 'desc')->first();
        return Comment::all()->last();
    }
}
