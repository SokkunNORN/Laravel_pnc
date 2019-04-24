
@extends('template.template')

@section('content')

    <a href="{{route('post.create')}}" class="text-primary">
        <i class="material-icons">control_point</i>
    </a>
    <hr>
    @foreach ($post as $item)
        
    {{-- {{dd($item->tags)}} --}}
    <div class="card m-3 shadow-sm">
        <div class="card-body">
            <div class="text-right">
                <small>{{$item->created_at->diffForHumans()}}</small>
            </div>
            <h4>{{$item->title}}</h4>
            <p>{{$item->body}}</p>
            <div class="text-right">
                @foreach ($item->tags->pluck('content') as $tag)                    
                    <span class="badge badge-primary">{{$tag}}</span>
                @endforeach
            </div>
        </div>
        <div class="card-footer text-right">
            {{-- <a href="{{route('post.show', $item->id)}}" class="text-success">
                <i class="material-icons">visibility</i>
            </a> --}}
            <a href="{{route('post.edit', $item->id)}}" class="text-primary">
                <i class="material-icons">edit</i>
            </a>
            <a href="#mDeletePost" data-toggle="modal" data-id="{{$item->id}}" 
                data-title="{{$item->title}}" class="text-danger">
                <i class="material-icons">delete</i>
            </a>
        </div>
    </div>
    


    <div class="modal fade" id="mDeletePost">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="title"></p>
            </div>
            <div class="modal-footer">
                <form action="" id="deletePost" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submiy" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>


    @endforeach

@endsection