
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/icon.css')}}" rel="stylesheet">
</head>
<body>
    
    @yield('content')

    <script src="{{url('js/app.js')}}"></script>
    {{-- ######### modal delete ########## --}}
    <script>
        // delete modal
        $('#deleteModal').on('show.bs.modal', function(event) {
             var button = $(event.relatedTarget);
             var id = button.data('id')
             console.log('id ' + id);
             var modal = $(this)
             var url = "{{url('comments')}}/" + id;
             $('#mDelete').attr('action', url);
             console.log(url);
        })

        // show modal
        $('#showModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id')
            var body = button.data('body')
            var created = button.data('created')
            console.log('id ' + id);
            console.log('body ' + body);
            console.log('create ' + created);
            var modal = $(this)
            modal.find('#created').text(created);
            modal.find('#body').text(body);
        })

        // edit modal
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id')
            var body = button.data('body')
            console.log('id ' + id);
            console.log('body ' + body);
            var modal = $(this)
            modal.find('#body').text(body);
             var url = "{{url('comments')}}/" + id;
             $('#mUpdate').attr('action', url);
             console.log(url);
        })

        $("#dModal, #aModal, #uModal").fadeTo(5000, 500).slideUp();

    </script>
</body>
</html>