
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Placement</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
</head>
<body class="bg-secondary">
    
    
    <div class="d-flex" id="wrapper">

        {{-- include sidebar --}}
        @include('inc.sidebar')
    
        <!-- Page Content -->
        <div id="page-content-wrapper">

            {{-- include navbar --}}
            @include('inc.navbar')
            <div class="container mt-4">
                @yield('content')
            </div>
    
        </div>
        <!-- /#page-content-wrapper -->
    
      </div>
      <!-- /#wrapper -->
       

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>