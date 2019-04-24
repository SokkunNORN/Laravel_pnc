
     
@extends('pages.blog')
@section('content')
         
    <div class="jumbotron">
        <h1 class="text-center display-1">Comment</h1>
    </div>
<div class="container mt-4">
    {{-- <a href="{{route('comments.create')}}" class="text-primary" title="Add Comment">
        <i class="material-icons">control_point</i>
    </a> --}}
    <a href="#" data-toggle="modal" data-target="#addModal" class="text-primary" title="Add Comment">
        <i class="material-icons">control_point</i>
    </a>
    <hr>

    {{-- ########## alert ########## --}}
    {{-- delete --}}
    @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" id="dModal" role="alert">
            {{session('delete')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- update --}}
    @if (session('update'))
        <div class="alert alert-success alert-dismissible fade show" id="uModal" role="alert">
            {{session('update')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- add --}}
    @if (session('add'))
        <div class="alert alert-primary alert-dismissible fade show" id="aModal" role="alert">
            {{session('add')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    {{-- ######### end alert ######### --}}

    @if ($comment != "")
        @foreach ($comment as $item)
            <div class="card">
                <div class="card-body">
                    <p>{{$item->body}}</p>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        {{-- <a href="{{route('comments.show', $item->id)}}" 
                            class="text-success" title="View Comment">
                            <i class="material-icons">visibility</i>
                        </a> --}}
                        <a href="#" data-toggle="modal" data-target="#showModal" data-id="{{$item->id}}"
                            data-body="{{$item->body}}"  data-created="{{$item->created_at->diffForHumans()}}" 
                            class="text-success" title="View Comment">
                            <i class="material-icons">visibility</i>
                        </a>
                        {{-- <a href="{{route('comments.edit', $item->id)}}" 
                            class="text-primary" title="Edit Comment">
                            <i class="material-icons">edit</i>
                        </a> --}}
                        <a href="#"  data-toggle="modal" data-target="#editModal" 
                            data-id="{{$item->id}}" data-body="{{$item->body}}"
                            class="text-primary" title="Edit Comment">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="#" class="text-danger" data-toggle="modal" data-id="{{$item->id}}"
                            data-target="#deleteModal" title="Delete Comment">
                            <i class="material-icons">delete</i>
                        </a>
                    </div>
                </div>
            </div> 
            <br>
        @endforeach 
        
        {{-- ########## modal action crud ########## --}}
        {{-- add comment --}}
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Comment!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('comments.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea placeholder="Comment" name="body" 
                                    style="resize: none;" 
                                    cols="30" 
                                    rows="10"
                                    required
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" style="width: 49.5%;"
                                data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" style="width: 49.6%;">
                                    Add Comment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        @if (!empty($item))

            {{-- delete commemt --}}
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

            {{-- show commemt --}}
            <div class="modal fade" id="showModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-right">
                                <small id="created"></small>
                            </div>
                            <p id="body"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" 
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- edit comment --}}
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="mUpdate" method="post">
                                @csrf
                                @method("put")
                                <div class="form-group">
                                    <textarea placeholder="Comment" name="body" 
                                        id="body"
                                        style="resize: none;" 
                                        cols="30" 
                                        rows="10"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-secondary" style="width: 49.5%;" 
                                    data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" style="width: 49.6%;">
                                        Update Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @else 
            <h4 class="text-center">No Comment here!</h4>
        @endif

    @endif 
           

</div>

@endsection
        