<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('/src/css/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/src/css/main.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/src/css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/src/css/buttons.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('/src/css/font-awesome-4.6.3/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('src/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::asset('/src/css/typeahead.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


</head>
<body>
@include('includes.header')


<div class="container">
    @yield('content')
</div>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script src="{{URL::to('/src/js/notificationhandler.js')}}"></script>
<script src="{{URL::to('/src/js/notification_html.js')}}"></script>
<script src="{{URL::to('/src/js/jquery.noty.packaged.js')}}"></script>
<script src="{{URL::to('src/css/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('src/js/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script src="{{URL::to('src/js/app.js')}}"></script>
<script src="{{URL::to('src/js/datatables.js')}}"></script>

</body>
</html>