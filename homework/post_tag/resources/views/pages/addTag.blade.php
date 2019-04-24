@extends('template.template')
@section('content')
    
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <a href="{{route('tag.index')}}" class="text-primary">
                <i class="material-icons">arrow_back</i>
            </a>
            <hr>
            <div class="card shadow-sm p-3">
                <div class="card-body">
                    <h3 class="text-center">Tag</h3>
                    <hr>                    
                    <form action="{{route('tag.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tag name:</label>
                            <input type="text" name="content" placeholder="tag name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Add Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection