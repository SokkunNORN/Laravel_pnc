
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Placement</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-secondary">

    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card shadow-sm">
                    <div class="card-header text-center">Job Placement</div>
                    <div class="card-body">
                        <form action="#!">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" style="cursor:pointer;" name="gender" value="Male">Male
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" style="cursor:pointer;" name="gender" value="Female">Female
                                    </div>
                                    <br>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <select class="form-control" style="cursor:pointer;">
                                            <option value="#">Select your class...</option>
                                            <option value="WEB">WEB</option>
                                            <option value="SNA">SNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-block btn-primary">Register</button>
                                    <hr>
                                    <p class="text-center"><a href="{{url('/')}}">Log In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>



