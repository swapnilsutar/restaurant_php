<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Indian Food Resto</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                @auth                      
                    @else
        
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">Indian Food Restaurant </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">exp</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        </ul>
                        
                        <a class="nav-link" href="{{ url('/home') }}">Home </a>
                        <a class="nav-link" href="#">Reservation</a>
                        
                        <a class="nav-link" href="#">menu</a>
                        
                        <a class="nav-link" href="#">Contact</a>
                        
                    <span class="navbar-text">
                        
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </span>                
                    @if (Route::has('register'))
                    <span class="navbar-text">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
        
                    </span>
                </div>
            </nav>
                        @endif
                    @endauth  
            @endif                     
  
            <!-- carousal -->
            <div class="content">

                <div class="bg_content">
                    
                    <div class="c_title">
                        Welcome to Indian Food Restaurant
                    </div>
                </div>

            </div>


            <div class="menu">
            
                <div class="menu_title">
                        menus
                </div>
                 <div class="menu_title1">
                        <a href=""> View all menus </a>
                </div>


                <div class="coninter row">
                    <div class="col-lg-4 menu_img">

                        <img src="/images/pizza.jpg" alt="first">
                            <div class="overlay">
                                    <div class="ovrlay_text">
                                        PIZZA
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-4 menu_img">
                        <img src="/images/samosa.jpg" alt="second">
                         <div class="overlay">
                                    <div class="ovrlay_text">
                                        Samosa
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-4 menu_img">
                        <img src="/images/pizza.jpg" alt="third">
                         <div class="overlay">
                                    <div class="ovrlay_text">
                                        PIZZA
                                    </div>
                            </div>
                    </div>
                
                </div>    

            
            </div>

            <div class="reservation">

                <div class="offer_title">
                            offers & events &#169; Indian Food Restaurant
                </div>


            </div>

            <div class="contact">
                   
                &#169; Designed By Swapnil Sutar

            </div>

        </div>
        
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
<!-- 
    <script>
            $(document).ready(function() {
  //parallax scroll
            $(window).on("load scroll", function() {
                var parallaxElement = $(".c_title"),
                parallaxQuantity = parallaxElement.length;
                window.requestAnimationFrame(function() {
                for (var i = 0; i < parallaxQuantity; i++) {
                    var currentElement = parallaxElement.eq(i),
                    windowTop = $(window).scrollTop(),
                    elementTop = currentElement.offset().top,
                    elementHeight = currentElement.height(),
                    viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
                    scrolled = windowTop - elementTop + viewPortHeight;
                    currentElement.css({
                    transform: "translate3d(0," + scrolled * -0.17 + "px, 0)"
                    });
                }
                });
            });
            });


    </script> -->
    
        </body>

</html>
