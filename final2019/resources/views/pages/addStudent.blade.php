
@extends('template')

@section('content')
    
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2>Create New Student</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('student.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Student Name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                        <div class="form-check form-check-inline">
                            @foreach ($courses as $item)  
                                <input class="form-check-input" type="checkbox" name="check[]" value="{{$item->id}}">
                                <label class="form-check-label">{{$item->title}}</label> &nbsp;
                            @endforeach
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

@endsection


