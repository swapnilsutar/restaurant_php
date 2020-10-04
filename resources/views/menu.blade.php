@extends('layouts.app')

@section('content')
<!-- 
    <table class='menumode' border='1'>
    
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Offer</th>
        <th>Total Rate</th>
        <th>Categories</th>
    
    </tr>
    @foreach($foodData ?? '' as $food)

        <tr>

               <td>
               {{ $food->dish_name }}
                </td>
        
        <td>
        {{ $food->price }}
        </td>
        <td>
        {{ $food->offer }}
        
        </td>
        <td>
        {{ $food->total_rate }}
        
        </td>
        <td>
        {{ $food->categories }}
        
        </td>
        </tr>
               
    @endforeach

    </table> -->

    <div class="menus">
                <div class="insta_text">
                     menus
                </div>

    </div>

    <div class="startermenu">
                <div class="insta_text">
                    Starter menu
                </div>
                <center>

                <a href="stater">
                    <button class='follow_me_btn'>
                        click here
                    </button>
                    </a>
                </center>
    </div>


    <div class="mainmenu_back">
                <div class="insta_text">
                    main menu
                </div>
                <center>

                <a href="/maincource">
                    <button class='follow_me_btn'>
                        click here
                    </button>
                    </a>
                </center>
    </div>

    <div class="dessert">
                <div class="insta_text">
                   dessert
                </div>
                <center>
                <a href="dessert">
                    <button class='follow_me_btn'>
                        click here
                    </button>
                    </a>
                </center>
    </div>


@endsection