
@extends('blog.blog')
@section('content')
    
    <div class="container mt-4">
        <a href="{{route('posts.index')}}" class="btn btn-primary">Turn Back</a>
        <hr>
        <div class="card mt-4">
            <div class="card-body">
                <h4>{{$post->title}}</h4>
                <p>{{$post->description}}</p>
            </div>
        </div>
    </div>

@endsection