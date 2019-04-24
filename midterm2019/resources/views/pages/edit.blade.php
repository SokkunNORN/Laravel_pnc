
@extends('pages.template')
@section('content')
<div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h3>Edit Student</h3></div>
                <div class="card-body">
                    <form action="{{route('student.update', $data->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <input type="text" value="{{$data->name}}" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{$data->email}}" name="email" class="form-control">
                        </div>
                        <div class="form-check">
                            @if ($data->gender=="Male")
                                <input type="radio" name="gender" class="form-check-input" value="Male" checked>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" class="form-check-input" value="Female">Female
                            @else
                                <input type="radio" name="gender" class="form-check-input" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" class="form-check-input" value="Female" checked>Female
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <input type="number" value="{{$data->age}}" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="add">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
@endsection