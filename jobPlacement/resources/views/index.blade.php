
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
                            <div class="form-group">
                                <input type="text" placeholder="Username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary">Log In</button>
                            </div>
                            <hr>
                            <p class="text-center"><a href="{{url('/register')}}">Register</a></p>
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