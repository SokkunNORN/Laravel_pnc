<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Index is first one";

        //stragtagy 1
        // return view('page.index', compact('title'));

        return view('page.index')->with("title", $title);
       
    }

    public function about(){
         $title = "about is first one";
        return view('page.about')->with('title',$title);
    }

    // public function server(){
    //     return view('page.server');
    // }

    public function first(){
        return view('page.first');
    }

    public function test(){
        return view('page.test');
    }

   public function server(){
    $data = array(
        'title'=>'Services',
        'services'=>['PHP','Jquery','programimg','PHP','Jquery','programimg'],
    );

    return view('page.server')->with($data);
   }
}
