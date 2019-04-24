
@extends('layout.layout')

@section('content')
    
<div class="row">
    <div class="col-sm-0 col-md-4 col-lg-2"></div>
    <div class="col-sm-12 col-md-8 col-lg-10">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3>Add Job Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="#!" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="Title" name="title" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Description" name="description" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Requirement" name="requirement" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Location" name="lacation" required class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

@endsection