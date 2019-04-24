
@extends('pages.template')
@section('content')
    
    <a href="{{route('student.create')}}" class="btn btn-primary">Create</a>
    <hr>
    <table class="table">
        <thead class="bg-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->age}}</td>
                <td>
                    <a href="{{route('student.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    <a href="#dModal" data-toggle="modal" 
                        data-id="{{$item->id}}"
                        class="btn btn-danger">Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="dModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete !</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Do you want to delete?</p>
            </div>
            <div class="modal-footer">
                <form action="" id="mDelete" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection
