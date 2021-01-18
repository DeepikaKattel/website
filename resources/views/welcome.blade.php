<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/welcome.css')}}">
        <link href="{{asset('css/menu.css')}}" rel="stylesheet" media="all" type="text/css">
        <link href="{{asset('css/bootstrap.min.css')}}}">
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-fixed-top">
            @include('partials.navbar')
        </nav>
    </body>
</html>