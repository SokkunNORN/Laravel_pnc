@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Post</h2>
        <a href="{{route('post.create')}}" class="text-primary">
            <i class="material-icons">control_point</i>
        </a>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                @foreach ($posts as $item)
                    
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <small class="float-right">{{$item['created_at']->diffForHumans()}}</small>
                            <h3>{{$item['title']}}</h3>
                            <hr>
                            <p>
                                {{$item['content']}}
                                <form action="{{route('post.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm float-right text-danger">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </p>
                            <hr>
                            <a href="#!" class="text-secondary">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <span class="ml-3">{{$numberUser}} .like</span>
                        </div>
                    </div>
                    
                @endforeach

            </div>
            <div class="col-3"></div>
        </div>
    </div>

@endsection