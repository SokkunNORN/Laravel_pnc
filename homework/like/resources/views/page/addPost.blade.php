@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Post</h2>
        <a href="{{route('post.index')}}" class="text-primary">
            <i class="material-icons">arrow_back</i>
        </a>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <small class="float-right">4 hours</small>
                        <h3>Add Post</h3>
                        <hr>
                        <form action="{{route('post.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="Title" name='title' class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="content" class="form-control"
                                    placeholder="content" id="" cols="30" rows="10"
                                    style="resize:none;"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

@endsection