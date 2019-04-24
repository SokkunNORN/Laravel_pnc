
@extends('template.template')

@section('content')

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <a href="{{route('post.index')}}" class="text-danger">
                <i class="material-icons">arrow_back</i>
            </a>
            <hr>
            <div class="card p-3">
                <div class="card-body">
                    <h4>Update Post</h4>
                    <hr>                    
                    <form method="post" action="{{route('post.update', $post->id)}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" placeholder="title"
                                value="{{$post->title}}" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" placeholder="Content" 
                                style="resize:none;" id="" cols="30" rows="10">{{$post->body}}
                            </textarea>
                        </div>
                        
                        @foreach ($postTag as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check[]"
                                    value="{{$item->id}}" checked> {{$item->content}}
                            </div> 
                        @endforeach
                        
                        @foreach ($tagDiff as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check[]"
                                    value="{{$item->id}}" > {{$item->content}}
                            </div> 
                        @endforeach

                        <div class="form-group mt-3">
                            <button class="btn btn-primary">Save Post</button>
                        </div>        
                    </form>
                </div>
            </div>
        </div>
    </div>
            
@endsection