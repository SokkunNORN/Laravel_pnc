
@extends('pages.template')
@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h3>Add Student</h3></div>
                <div class="card-body">
                    <form action="{{route('student.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" class="form-check-input" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" class="form-check-input" value="Female">Female
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
@endsection