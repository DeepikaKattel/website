<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12 p-0 m-0">
                <div class="col-lg-6 col-12">
                    @include('partials.navbar')
                    <h1 class="home wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">Let IT Grow</h1>
                    <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="2s">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </h2>

                </div>
                <div class="col-lg-6 wow fadeInUp background-flowers" id="main">
                    <figure class="swing float-right">
                        <img src="{{asset('images/logoFull.png')}}"/>
                    </figure>
                </div>
            </div>
        </div>

    </section>


    <section class="container about">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12 wow fadeIn">
                <div class="col-lg-2 col-12 wow rotateIn">
                    <h1 class="aboutHeading">About Us</h1>
                </div>
                <div class="col-lg-10 aboutContentImg col-12 wow fadeIn">
                    <div class="wow aboutContent bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
                        <h1>Why US?</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupi</p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="container services">
        <div class="row justify-content-center">
            <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">Services</h1>
            <div class="col-lg-12 col-12 p-0 m-0">
                <div class="col-lg-6 col-12 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
{{--                    <h2 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">We provide all kind of services as per the requirements of our clients.</h2>--}}
                    <main id="main" class="servicesImg">

                    </main>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="container">
                        <div class="row flex-container">
                            <div class="col wow fadeInUp flex-item" data-wow-duration="3s" data-wow-delay="0.5s" id="service1">
                                <img class="m-3" src="{{asset('images/design.PNG')}}"/>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                    Bonorum et Malorum for use in a type specimen book.
                                    </p>
                            </div>
                            <div class="col wow fadeInUp flex-item" data-wow-duration="3s" data-wow-delay="1s" id="service2">
                                <img class="m-3" src="{{asset('images/development.PNG')}}"/>
                                <h3> Web Development</h3>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                    inibus Bonorum et Malorum for use in a type specimen book.
                                    </p>
                            </div>
{{--                            <div class="w-100"></div>--}}
                            <div class="col wow fadeInUp flex-item" data-wow-duration="3s" data-wow-delay="1.5s" id="service3">
                                <img class="m-3" src="{{asset('images/browser.PNG')}}"/>
                                <h3>Hosting Services</h3>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                    inibus Bonorum et Malorum for use in a type specimen book.
                                   </p>
                            </div>
                            <div class="col wow fadeInUp flex-item" data-wow-duration="3s" data-wow-delay="2s" id="service4">
                                <img class="m-3" src="{{asset('images/mobile-app.PNG')}}"/>
                                <h3>Mobile Application Development</h3>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                    inibus Bonorum et Malorum for use in a type specimen book.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container products">
        <div class="row justify-content-center">
            <h1>Our Products</h1>
            <div class="col-lg-12 col-12  p-0 m-0">
                <div class="col-lg-4 col-12" id="cardImg">
                    <div class="card text-center">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                        <h2>Product 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit,consequat.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12" id="cardImg">
                    <div class="card text-center">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                        <h2>Product 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit,consequat.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12" id="cardImg">
                    <div class="card text-center">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                        <h2>Product 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit,consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="career">
        <div class="row justify-content-center">
                <div class="wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
                    <h1>Choose Us</h1>
                </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{asset('js/nav.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    {{-- Wow js --}}
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    </body>
    </html>
