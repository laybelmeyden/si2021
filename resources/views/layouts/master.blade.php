<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SI 2021</title>

    @include('layouts.css')
</head>
<body>
@yield('content')
@include('layouts.navbar')
@include('layouts.footer')
@include('layouts.js')
</body>
</html>