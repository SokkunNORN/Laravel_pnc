@extends('blog.blog')
@section('content')
    
    <div class="jumbotron">
        <h1 class="text-center display-1">Cambodia News</h1>
    </div>
    <div class="container">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
        <hr>
        @foreach ($posts as $item)
            
            <div class="card mt-4">
                <div class="card-body">
                    <div class="card-title">
                        <h4>{{$item->title}}</h4>
                    </div>
                    <form action="{{route('posts.destroy', $item->id)}}">
                        <a href="{{route('posts.show', $item->id)}}"
                            class="btn btn-success btn-sm">Detail</a>
                        <a href="{{route('posts.edit', $item->id)}}"
                            class="btn btn-primary btn-sm">Edit</a>
                        @csrf
                        @method('delete')
                        <a href="{{route('posts.destroy', $item->id)}}"
                            class="btn btn-danger btn-sm">Delete</a>
                    </form>
                </div>
            </div>

        @endforeach
    </div>

@endsection