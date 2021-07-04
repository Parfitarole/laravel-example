<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
        <title>Twitter Clone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="HTML5 Example Page">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    </head>
    <body>
        @include('layout.navbar')
        <div class="container mt-4" style="min-height: 90vh;">
            @yield('content')
        </div>
        @include('layout.footer')
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
