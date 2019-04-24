
     
@extends('pages.blog')
@section('content')
         
    <div class="jumbotron">
        <h1 class="text-center display-1">Comment</h1>
    </div>
<div class="container mt-4">
    <a href="{{route('comments.create')}}" class="text-primary" title="Add Comment">
        <i class="material-icons">control_point</i>
    </a>
    <hr>

    {{-- ########## alert ########## --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Action: </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    {{-- ######### end alert ######### --}}

    @if ($comment != "")
        @foreach ($comment as $item)
            <div class="card">
                <div class="card-body">
                    <p>{{$item->body}}</p>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        {{-- <form action="{{route('comments.destroy', $item->id)}}" method="post"> --}}
                            <a href="{{route('comments.show', $item->id)}}" class="text-success" title="View Comment">
                                <i class="material-icons">visibility</i>
                            </a>
                            <a href="{{route('comments.edit', $item->id)}}" class="text-primary" title="Edit Comment">
                                <i class="material-icons">edit</i>
                            </a>

                            {{-- @csrf
                            @method('delete') --}}
                            <a href="#" class="text-danger" data-toggle="modal" data-id="{{$item->id}}"
                                data-target="#deleteModal" title="Delete Comment">
                                <i class="material-icons">delete</i>
                            </a>
                        {{-- </form> --}}
                    </div>
                </div>
            </div> 
            <br>
        @endforeach    
    @endif 
    
    {{-- ########## modal delete ########## --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <h5>Do you want to delete this comment?</h5>
                </div>
                <div class="modal-footer">
                    <form action="{{route('comments.destroy', $item->id)}}" id="mDelete" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
            

</div>

@endsection
        