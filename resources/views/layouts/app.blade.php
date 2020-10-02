<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/stylelog.css" rel="stylesheet">
    

</head>
<body>
    
<div id="app">


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
                    <a class="nav-link" href="/reservation">Reservation</a>
                    
                    <a class="nav-link" href="/menu">menu</a>
                    
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
                            
                        <a href="profile" class="dropdown-item"> {{ __('Profile') }} </a>

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


        
            <br><br><br><br>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        
    </body>
</html>
