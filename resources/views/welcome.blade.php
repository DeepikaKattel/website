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
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}}">
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">

    </head>
    <body>
    @include('partials.navbar')
    <main id="main" class="background-flowers">
        <figure class="swing" style="float:right">
            <img src="{{asset('images/logoFull.png')}}">
        </figure>
    </main>
    </body>
    <script src="{{asset('js/nav.js')}}"></script>

</html>
