
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-light" href="{{url('/')}}">PNC Timetables</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="{{url('/teacher')}}">Teachers<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="student">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/room')}}">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/printable')}}">Printable</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('/statistics')}}">Statictics</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>


<script src="{{('js/app.js')}}"></script>
</body>
</html>