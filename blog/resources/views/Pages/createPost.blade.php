
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

<form action="{{url('store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title:</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content:</label>
        <textarea class="form-control" name="content" placeholder="Content" 
        rows="5" id="comment" style="resize:none;"></textarea>
    </div>
    {{-- <div class="form-group">
        <label for="exampleFormControlSelect1">User</label>
        <select class="form-control" name="user_id" id="exampleFormControlSelect1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div> --}}
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection

