<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="d-flex flex-column min-vh-100">
    @include('include.header')

    <!-- @if(!Request::is('about'))
        @include('include.logBlock')
    @endif -->

    <!-- <p>{{Request::path()}}</p> -->

    <div class="container my-4">
        @include('include.messages')
        @yield('content')
    </div>
    
    @include('include.footer')
</body>
</html>