
@extends('template.template')

@section('content')

    <a href="{{route("tag.create")}}" class="text-primary">
        <i class="material-icons">control_point</i>
    </a>
    <hr>    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tag as $item)
                <tr>
                    <td>{{$item->content}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>        
                        <a href="{{route('tag.edit',$item->id)}}" class="text-primary">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="#mDelete" data-toggle="modal" data-id="{{$item->id}}" 
                            data-content="{{$item->content}}" class="text-danger">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
                
            @endforeach 
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="mDelete" tabindex="-1" role="dialog" 
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="content"></p>
            </div>
            <div class="modal-footer">
                <form action="" id="delete" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection
