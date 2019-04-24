
@extends('tamplate.template')
@section('content')
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <a href="{{url('post')}}" class="text-success">
                    <i class="material-icons">arrow_back</i>
                </a>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h4>{{$post->title}}</h4>
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

@endsection