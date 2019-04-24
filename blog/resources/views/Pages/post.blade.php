
@extends('tamplate.template')
@section('content')
<h2>Jobs Posts</h2>
@if (Auth::check())
  <a href="{{url('/createpost')}}" title="New Post"><i class="material-icons">control_point</i></a>
@endif
<a href="{{url('/sendMail')}}" class="text-right" title="send email"><i class="material-icons">email</i></a>
<hr>

@if (session('mail'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('mail')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session('delete'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('delete')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session('update'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('update')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session('protect'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('protect')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

    {{-- {{dd($post)}} --}}
    <ul class="list-group">
        @foreach ($post as $item => $value)
            <li class="list-group-item">
                <p class="text-right"><small>{{$value['created_at']->diffForHumans()}}</small></p>
                <h2>{{$value['title']}}</h2>
                <small>By: {{$value->user->name}}</small>

                @if (Auth::check()) {{--check user have login or not--}}

                  @if (Auth::user()->id == $value->user_id) {{--check post that have belong to user--}}
                    <p class="text-right">
                      <a href="/show/{{$value['id']}}" class="text-success"><i class="material-icons">visibility</i></a>
                      <a href="/updatepost/{{$value['id']}}"><i class="material-icons">border_color</i></a>
                      <a href="#deleteModal" data-id="{{$value['id']}}" 
                        data-toggle="modal" data-title="{{$value['title']}}" 
                        class="text-danger">
                          <i class="material-icons">delete_forever</i>
                      </a>
                    </p> 
                  @endif

                @endif

            </li>
            <br>
        @endforeach
    </ul>


    <!--############### Modal delete post ################-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Do you want to delete this post?</h4>
            <p id="postTitle"></p>
          </div>

          <form action="" id="mDelete" method="post">
            <div class="modal-footer">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
          </form>

        </div>
      </div>
    </div>
{{-- ############ end model ################## --}}

{{-- 
    <ul class="list-group">
        @foreach ($post as $item)
            <li class="list-group-item">
                <h2>{{$item->title}}</h2>
                <p>{{$item->content}}</p>
            </li>
        @endforeach
    </ul> --}}
    
@endsection