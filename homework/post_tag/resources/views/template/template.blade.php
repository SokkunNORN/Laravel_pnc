<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
</head>
<body>
    
    @include('layout.header')

    <div class="container mb-4 mt-4">
        @yield('content')
    </div>

    @include('layout.footer')

    <script src="{{asset('js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#mDelete').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var content = button.data('content');
                console.log('id ' + id + " and content: " + content);
                var modal = $(this)
                modal.find('#content').text(content);
                var url = "{{url('tag')}}/" + id;
                $('#delete').attr('action', url);
            })

            $('#mDeletePost').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var title = button.data('title');
                console.log('id ' + id + " and title : " + title);
                var modal = $(this)
                modal.find('#title').text(title);
                var url = "{{url('post')}}/" + id;
                $('#deletePost').attr('action', url);
            })
        })
    </script>

</body>
</html>