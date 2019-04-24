<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;


class SendMailController extends Controller
{
    public function mail() {
        Mail::to('sokkun.norn1998@gmail.com')->send(new SendMail());
        return redirect("post")->with('mail', 'Email is already sanded !');
    }
}
