
@extends('pages.blog')
@section('content')

<div class="container mt-4">
    <a href="{{route('comments.index')}}" title="Go back" class="text-primary">
        <i class="material-icons">arrow_back</i>
    </a>
    <hr>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="text-right"><small>{{$data->created_at->diffForHumans()}}</small></div>
            <p>{{$data->body}}</p>
        </div>
    </div>
</div>

@endsection