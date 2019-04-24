<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return ('welcome');
// });

// Route::get('/contact/{id?}', function ($id=19) {
//     echo "this id is: " . $id;
// });

// Route::get('/admin/{name?}/{age?}', function($name="sokkun", $age=12) {
//     return "Background admin: name: " . $name . " and age: " . $age; 
// });


// Route::get('/', 'PageController@home');

Route::get('/customer', 'PageController@index');

Route::get('/home', 'PageController@homepage');

Route::get('/contact', 'PageController@contact');

Route::get('/service', 'PageController@service');

Route::get('/post', 'PageController@post');

Route::get('/createpost', 'PageController@createpost');

Route::post('/store', 'PageController@store');

Route::get('/updatepost/{id}', 'PageController@editPost');

// patch request for update
Route::patch('/update/{id}', 'PageController@updatePost');

// delete request for delete
Route::delete('/delete/{id}', 'PageController@delete');

// show 
Route::get('/show/{id}', 'PageController@show');



// ########### comment ###########
Route::resource('comment', 'CommentController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// <!-- ################ testing ################ -->
Route::get('/readPost', function() {
    $user = App\User::find(1);

    $posts = $user->posts()->get();
    foreach($posts as $post) {
        $data[]=[
            'name'=>$post->user->name,
            'itle'=>$post->title,
            'ctontent'=>$post->content,
        ];
    }
    return $data;
});
// ################ end testing #############



// ========= send mail ============
Route::get('/sendMail', 'SendMailController@mail');

// =========== file =============
Route::get('/file','FileController@create');

Route::post('/file','FileController@store');

Route::get('/upload', 'FileController@uploadFile');

Route::post('/uploading', 'FileController@uploadingFile');

Route::get('/profile', 'FileController@profile');

Route::get('/admin', 'AdminController@index');

Route::get('/student', 'StudentController@index');


