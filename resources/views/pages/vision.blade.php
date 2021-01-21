<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/common.css')}}">
        <link rel="stylesheet" href="{{asset('css/vision.css')}}">
        
    </head>
    <body>
        @include('partials.innernavbar')

        <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
            <div class="breadCrumbCenter column">
                <p class="commontxt">VISION</p>
                <p  class="commontxtsmall">You imagine  -  We build</p>     
                <button class="breadCrumbBtn radius">
                    <a href="/"><i class="fas fa-home"></i>  Home</a>
                </button> 
                <button class="breadCrumbBtn radius">
                    <a href=""><i class="fas fa-eye"></i>  Vision</a>
                </button>    
            </div>
        </div>

        <div class='space1'></div>

        <section class="inner-content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 about-contentWrap">
                        <div class="commonTitle"><h2>Vision</h2></div>
                        <div class='space2'></div>
                        <div class="image-wrap wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft"><img width="291" height="293" src="{{asset('images/vission.jpg')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="vision-img"></div>
                        <div class="content-wrap wow slideInRight animated" data-wow-delay="700ms" style="visibility: visible; animation-delay: 700ms; animation-name: slideInRight; text-align:justify;">
                            <p>We believe, Technology is made by everybody for everybody. Today, Modern world offers technologies that are affordable to people from all backgrounds and we want to serve people with its benefits. Let IT grow is your solution to the technological advancement you and your business should be experiencing along with the advantage you deserve.</p>
                            <p>We offer our services for all kinds of business as well as individuals who want to make a difference on the work they do. Our IT services are sure to benefit people from all backgrounds that want to use IT to grow their business. On times, where time and tides wait for none, we aim to bridge the gap between fast changing technology and Nepali Society. With an extremely creative team, we constantly see ourselves generating and implementing revolutionary ideas that aim to benefit the society as well as the organization.We hope to be the ultimate gateway for connecting the Nepali society with the emerging technologies at reasonable and affordable prices.</p>
                            <p>Let IT Grow is a team of enthusiastic young minds that want to make a difference by providing quality IT services to people all over Nepal regardless of where they come from.
                                You dictate, we Create.</p>
                    </div>            
                </div>
            </div>
        </section>

        <div class='space1'></div>
        <div class='space1'></div>

        <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="vision-box">
                        <div class="vision-box-image">
                            <img src="{{asset('images/mission.png')}}" alt="mission"/>
                        </div>
                    <div class="container mt-3">
                        <div class="vision-inner-box-image">
                            <h4>Our Mission</h4>
                            <p>At Let IT Grow, we will always strive to deliver an innovative, technically sharp and affordable products and services that deliver maximum return.</p>        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vision-box">
                        <div class="vision-box-image">
                            <img src="{{asset('images/objective.png')}}" alt="objective"/>
                        </div>
                        <div class="container mt-3">
                            <div class="vision-inner-box-image">
                                <h4>Our Objective</h4>
                                <p>To deliver high quality products and services within required timeframe with best practices for customer satisfaction in very reasonable price without comprimising in quality.</p>
            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vision-box">
                        <div class="vision-box-image">
                            <img src="{{asset('images/motivation.png')}}" alt="motivation"/>
                        </div>
                        <div class="container mt-3">
                            <div class="vision-inner-box-image">
                                <h4>Our Motivation</h4>
                                <p>To provide innovative solutions to solve the biggest problems in software and web technology. We are dedicated to working with our trusted partners to leverage our strong skills and knowledge.</p>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class='space1'></div>
        <div class='space1'></div>
    </body>
  
</html>