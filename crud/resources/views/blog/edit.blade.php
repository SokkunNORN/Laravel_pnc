
@extends('blog.blog')
@section('content')

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card mt-5 shadow-sm">
                <div class="card-header">Add Post</div>
                <div class="card-body">
                    {{-- {{dd($post)}} --}}
                    <form action="{{route('posts.update', $post)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" placeholder="Title" value="{{$post->title}}" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description" style="resize: none;" 
                                name="description" id="" cols="30" rows="10">{{$post->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>    

@endsection