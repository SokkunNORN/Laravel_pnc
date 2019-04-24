
@extends('tamplate.template')

@section('content')

<a href="{{url('/post')}}" title="Go Back"><i class="material-icons text-success">arrow_back</i></a>
<br><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{url('update/'.$post->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="exampleInputEmail1">Title:</label>
        <input value="{{$post->title}}" type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content:</label>
        <textarea class="form-control" name="content" placeholder="Content" 
        rows="5" id="comment" style="resize:none;">{{$post->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection

