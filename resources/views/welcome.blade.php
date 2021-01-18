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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        {{-- Animate css --}}
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" media="all" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">



    </head>
    <body>
    <section>
        <div class="col-lg-6 col-12">
            @include('partials.navbar')
            <h1 class="home wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">Let IT Grow</h1>
            <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="2s">Your Enterprise...</h2>
        </div>
        <div class="col-lg-6 wow fadeInUp">
            <main id="main" class="background-flowers">
                <figure class="swing" style="float:right">
                    <img src="{{asset('images/logoFull.png')}}"/>
                </figure>
            </main>
        </div>
    </section>


    <section class="about">
        <div class="col-lg-2 col-12">
            <h1>About Us</h1>
        </div>
        <div class="col-lg-10 col-12 aboutImg" >
            <div class="aboutContent wow bounceInRight" data-wow-duration="4s" data-wow-delay="0.5s">
                <p style="color:white">sdfsdfdsfasdfdsa<br>afsdfsfsd</p>
            </div>
        </div>

    </section>
    <section class="products">

    </section>
    <section class="team">
    </section>
    <script src="{{asset('js/nav.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- Wow js --}}
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    </body>
    </html>
