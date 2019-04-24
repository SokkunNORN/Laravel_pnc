
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <div class="container mt-4">
        @yield('content')
    </div>

<script src="{{asset('js/app.js')}}"></script>

<script>
    $('#dModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        console.log(id);
        var url = "{{url('student')}}/"+id;
        console.log(url);
        $('#mDelete').attr('action', url);
    })
</script>

</body>
</html>