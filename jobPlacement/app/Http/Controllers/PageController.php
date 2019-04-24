<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function managejob() {
        return view('pages.managejob');
    }

    public function jobpost() {
        return view('pages.jobpost');
    }

    public function viewstudent() {
        return view('pages.viewstudent');
    }

    public function logout() {
        return view('index');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function approve() {
        return view('pages.approve');
    }

    public function interview() {
        return view('pages.setInter');
    }

    public function setStudent() {
        return view('pages.setStudent');
    }

    public function addPost() {
        return view('pages.addPost');
    }
}
