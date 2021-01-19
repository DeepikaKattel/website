<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
        <div class="col-lg-6 col-12" >
            @include('partials.navbar')
            <h1 class="home wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">Let IT Grow</h1>
            <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="2s">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </h2>

        </div>
        <div class="col-lg-6 wow fadeInUp">
            <main id="main" class="background-flowers">
                <figure class="swing" style="float:right">
                    <img src="{{asset('images/logoFull.png')}}"/>
                </figure>
            </main>
        </div>

    </section>


    <section class="container about">
        <div class="row aboutImg" style="justify-content: center">
            <div class="col-lg-2 col-12 aboutHeading">
                <h1>About Us</h1>
            </div>
            <div class="col-lg-10 col-12 d-flex justify-content-center text-center">
                <div class="aboutContent wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                    <h1>Why US?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="col-lg-6 col-12">
            <main id="main" class="servicesImg">
                <h1>Services</h1>
            </main>
        </div>
        <div class="col-lg-6 col-12">
            <div class="container">
                <div class="row">
                    <div class="col" id="service1">
                        <img class="m-3" src="{{asset('images/design.PNG')}}"/>
                        <h3>Web Design</h3>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            Bonorum et Malorum for use in a type specimen book.
                             Bonorum et Malorum for use in a type specimen book.</p>
                    </div>
                    <div class="col" id="service2">
                        <img class="m-3" src="{{asset('images/development.PNG')}}"/>
                        <h3> Web Development</h3>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            inibus Bonorum et Malorum for use in a type specimen book.
                            inibus Bonorum et Malorum for use in a type specimen book.</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="col" id="service3">
                        <img class="m-3" src="{{asset('images/browser.PNG')}}"/>
                        <h3>Hosting Services</h3>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            inibus Bonorum et Malorum for use in a type specimen book.
                           norum et Malorum for use in a type specimen book.</p>
                    </div>
                    <div class="col" id="service4">
                        <img class="m-3" src="{{asset('images/mobile-app.PNG')}}"/>
                        <h3>Mobile Application Development</h3>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            inibus Bonorum et Malorum for use in a type specimen book.
                            onorum et Malorum for use in a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>




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
