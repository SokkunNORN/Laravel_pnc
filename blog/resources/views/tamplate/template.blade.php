<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','Laravel framwork')}}</title>
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

     {{-- link --}}
     <link rel="stylesheet"  href="{{asset('css/icon.css')}}">
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
     @include('layouts.header')

     <div class="container mt-5 mb-5">
        @yield('content')
     </div>
     
     @include('layouts.footer')

<script src="{{'js/app.js'}}"></script>

{{-- ######### modal delete ########## --}}
<script>
     $('#deleteModal').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
          var id = button.data('id')
          var postTitle = button.data('title');
          console.log('id ' + id);
          var modal = $(this)
          modal.find('#postTitle').text(postTitle);
          var url = "{{url('delete')}}/" + id;
          $('#mDelete').attr('action', url);
     })
</script>

</body>
</html>
