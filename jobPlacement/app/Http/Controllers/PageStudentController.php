<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageStudentController extends Controller
{
    public function home() {
        return view('pageStu.home');
    }

    public function jobpost() {
        return view('pageStu.jobpost');
    }

    public function apply() {
        return view('pageStu.apply');
    }

    public function candidate() {
        return view('pageStu.candidate');
    }

    public function comment() {
        return view('pageStu.comment');
    }

    public function interest() {
        return view('pageStu.interest');
    }

    public function profile() {
        return view('pageStu.profile');
    }

    public function register() {
        return view('pageStu.register');
    }

}
