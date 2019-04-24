<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PageController extends Controller
{

    public function home() {
        return view('home');
    }

    // public function home() {
    //     $test = "Admin";
    //     return view('Pages.home', compact('test'));
    // }

    public function index() {
        $data = array (
            '0'=>array('id' => 1, 'name' => 'Chandaraty', 'email' => 'chandataty@example.org'),
            '1'=>array('id' => 2, 'name' => 'Maly', 'email' => 'maly@example.org'),
            '2'=>array('id' => 3, 'name' => 'Samphas', 'email' => 'samphas@example.org'),
            '3'=>array('id' => 4, 'name' => 'Donat', 'email' => 'donat@example.org'),
        );
        return view('index', compact('data'));
    }

    public function homepage() {
        return view('Pages.home');
    }

    public function contact() {
        return view('Pages.contact');
    }

    public function service() {
        $data = array (
            'service' => ['Alan', 'Alan', 'Alan', 'Alan', 'Alan', 'Alan', 'Alan', 'Alan']
        );
        return view('Pages.service')->with('service');
    }

    public function post() {
        $post = \App\Post::all();
        return view('Pages.post', compact('post'));
    }
    
    public function createPost() {
        return view('Pages.createPost');
    }

    // ########### add data into table #############
    public function store(Request $request) {
        // dd($request);
        // validate
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        //get data from the form submit via their name attr
        $title = $request->title;
        $content = $request->content;

        // create post obj
        $post = new \App\Post;

        // assign data to post attr
        $post->title = $title;
        $post->content = $content;
        $post->user_id = Auth::user()->id;

        // save or add post obj into post table
        $post->save();

        // go to post route
        return redirect('post');
    }

    // public function delete() {
    //     return "delete";
    // }

    // ############## edit get data into form ###############
    public function editPost($id) {
        // dd($id);
        $post = Post::findOrFail($id); // get or select data by id 
        
        // protect user update not them post
        if (Auth::user()->id!==$post->user_id) {
            return redirect('post')->with('protect', 'Unauthorized Page !');
        }
 
        return view("Pages.updatePost", compact('post'));
    }


    // ############# save data from edit ############
    public function updatePost(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        // dd($id);

        // get or select data by id 
        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        // save post
        $post->save();            

        return redirect("post")->with('update', 'Post is updated !');
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
        return back()->with('delete', 'Post is deleted.');
    }

    public function show($id) {
        // dd($id);
        $post = Post::find($id);
        return view('Pages.detailPost', compact('post'));
    }

    
    public function __construct() {
        $this->middleware('auth', ['except' => ['post']]); // post is method
        // $this->middleware('auth'); 
    }

}
