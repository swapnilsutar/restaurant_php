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

        
        <div class="container-fluid">
      
        <!-- navbar dynamic -->
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Indian Food Restaurant') }} </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">|||</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                        
                        </ul>
                        <!-- <a class="nav-link" href="{{ url('/home') }}">Home </a> -->
                        <a class="nav-link" href="/">Home </a>
                        <a class="nav-link" href="/menu">menu</a>
                        <a class="nav-link" href="/reservation">Reservation</a>
                        
                        
                        <a class="nav-link" href="/contact">Contact</a>
                        
                    <span class="navbar-text">
                    @guest

                    @if (Route::has('login'))
                       @auth                      
                    @else
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </span>                
                        @if (Route::has('register'))
                        <span class="navbar-text">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>      
                        </span>
                        @endif
                    @endauth  
                    @endif    

                   @else
                            <li class="nav-link dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    
                                 <a href="{{ route('profile') }}" class="dropdown-item"> {{ __('Profile') }} </a>
                                 <a href="{{ url('dashboard') }}" class="dropdown-item"> {{ __('Admin') }} </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest          
                </div>
            </nav>


        </div>
       
         <div class="card-session">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    <div class="alert alert-success" role="alert">
                    {{ __('You are logged in!') }}
                    </div>
                    @endif

        </div>
        
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
                        <a href="menu"> View all menus </a>
                </div>

  
  
            <div class="container-fluid">

                <div class="row">
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
                                <img src="/images/gourmet-burger-scaled.jpg" alt="third">
                                <div class="overlay">
                                    <div class="ovrlay_text">
                                        burger
                                    </div>
                                </div>
                            </div>
                            
                        </div>    
                </div>

            
            </div>

            <div class="insta_follow">
                <div class="insta_text">
                    follow us on instagram
                </div>
                <center>

                    <button class='follow_me_btn'>
                        click here
                    </button>
                </center>
            </div>

            <div class="reservation">

                <div class="offer_title">
                            offers & events @ Indian Food Restaurant
                </div>

            <div class="container-fluid">

            
                <div class="row">
                    <div class="col-lg-4 offer_img">

                        <img src="/images/1543904720.jpg" alt="first">
                            <div class="overlay1">
                                    <div class="ovrlay_text1">
                                        birthday party night
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-4 offer_img">
                        <img src="/images/Select-Restaurants-In-India-Offer-Up-To-50-Discount.jpg" alt="second">
                         <div class="overlay1">
                                    <div class="ovrlay_text1">
                                        family time
                                    </div>
                            </div>
                    </div>
                    <div class="col-lg-4 offer_img">
                        <img src="/images/candle-light-dinner.jpg" alt="third">
                         <div class="overlay1">
                                    <div class="ovrlay_text1">
                                        special evening
                                    </div>
                            </div>
                    </div>
                
                </div>    

            </div>
        </div>
  
        <div class="contact">
              
            <div class="contact_sub">
            
                <div class="container">

                    <div class="row">

                            <div class="col-md-4 bottom_nav">
                                
                                <ul>
                                    <a href="/">
                                        <li>
                                            Home
                                        </li>
                                    </a>
                                    <a href="menu">
                                        <li>
                                            Menu
                                        </li>
                                    </a>
                                    <a href="reservation">
                                        <li>
                                            Reservation
                                        </li>
                                    </a>
                                    <a href="contact">
                                        <li>
                                           Contact
                                        </li>
                                    </a>
                                </ul>
                            
                            </div>

                            <div class="col-md-4 ">
                                    <p class="about_add_t">
                                        Address
                                    </p>
                                    <p class="about_add_c">
                                        Swapnil nagar 1st Block 1st Cross, <br> Rammurthy nagar, Kolhapur
                                    </p>

                                    <p class="about_add_t">
                                        Phone
                                    </p>
                                    <p class="about_add_c">
                                    +91 000000000                                        
                                    </p>
              
                            </div>

                            <div class="col-md-4">
                                CONNECT US
                                <br>
                                <br>
                                
                                <a href="">
                                <img src="images/linkedin (1).png" alt="" class="icon_s">
                                </a> &nbsp;
                                <a href="">
                                <img src="images/google-plus.png" alt="" class="icon_s">
                                </a>&nbsp;
                                <a href="">
                                <img src="images/facebook (1).png" alt="" class="icon_s">
                                </a>&nbsp;
                                <a href="">
                                <img src="images/instagram (1).png" alt="" class="icon_s">
                                </a>

                            </div>



                    </div>

                </div>
            
            
            </div>
            <!-- END contact_sub -->

            <footer>
             Copyright &#169; 2020
                                <br>
                Made by 
                <a href="https://www.linkedin.com/in/swapnilsutar/" target="blank">
                   Swapnil Sutar 
                </a>
            </footer>

            
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
