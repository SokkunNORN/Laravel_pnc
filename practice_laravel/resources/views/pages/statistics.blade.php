
@extends('template')

@section('content')
    
<form>
    <div class="form-group">
      <label for="exampleInputEmail1" class="d-flex justify-content-center">Username</label>
      <input type="email" class="form-control" id="exampleInputEmail1" 
        aria-describedby="emailHelp" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="d-flex justify-content-center">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
  

@endsection