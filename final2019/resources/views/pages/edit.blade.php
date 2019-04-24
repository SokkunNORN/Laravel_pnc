
@extends('template')

@section('content')
    
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Student</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('student.update',$student->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" placeholder="Student Name"
                                 value="{{$student->name}}" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email"
                                 value="{{$student->email}}" class="form-control">
                        </div>
                        <div class="form-check form-check-inline">
                            @foreach ($studentCourse as $item)
                                <input class="form-check-input" type="checkbox" name="check[]" checked value="{{$item->id}}">
                                <label class="form-check-label">{{$item->title}}</label> &nbsp;
                            @endforeach
                            @foreach ($sCourse as $item)  
                                <input class="form-check-input" type="checkbox" name="check[]" value="{{$item->id}}">
                                <label class="form-check-label">{{$item->title}}</label> &nbsp;
                            @endforeach
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

@endsection


