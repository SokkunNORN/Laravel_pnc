
@extends('template')

@section('content')
    
    <div class="card">
        <div class="card-header">
            <a href="{{route('student.create')}}" class="btn btn-success">New Student</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                @foreach ($item->courses()->pluck('title') as $course)
                                   {{$course}}, 
                                @endforeach
                            </td>
                            <td>
                                <form action="{{route('student.destroy',$item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('student.edit',$item->id)}}" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection