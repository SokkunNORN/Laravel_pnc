<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function template() {
        return view('template');
    }

    public function student() {
        return view('pages.student');
    }
    public function teacher() {
        return view('pages.teacher');
    }
    public function room() {
        return view('pages.room');
    }
    public function printable() {
        return view('pages.printable');
    }
    public function statistics() {
        return view('pages.statistics');
    }
}
