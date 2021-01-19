<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
</head>
<body>
    @include('partials.innernavbar')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">CONTACT US</p>
            <p  class="commontxtsmall">Contact us - Get best tech solution</p>     
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>  Home</a>
            </button> 
            <button class="breadCrumbBtn radius">
                <a href=""><i class="far fa-id-card"></i>  Contact Us</a>
            </button>    
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-7" >    
                    <div class="contactContainer">
                        <div class="commonTitle" style="text-align: start"><h2>Have any questions ? Let's get in touch !</h2></div>
                        <p class="inTouchTxt">Contact us if you are interested.</p>
                        <div class="formContainer">

                        </div>
                    </div>
                </div>
                <div class="col-md-5">     
                    <div class="moreContainer">
                            <h3 class="commonTitle">How Can We Help You?</h3><br>
                            <p>Please send your inquiry and feeback via the contact form. <i class="fas fa-address-book"></i> </p>
                            <p>If you need to know more please feel free to contact us via call. <i class="fas fa-phone"> 01-5901614</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>
    
</body>
</html>