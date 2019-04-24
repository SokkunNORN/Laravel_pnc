
@extends('tamplate.template')

@section('content')
    
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="post" action="{{url('/uploading')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload File</label>
                    <input type="file" class="form-control-file" name="upload">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

@endsection