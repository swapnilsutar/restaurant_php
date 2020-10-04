<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\foodmenu;

class menuController extends Controller
{
    //

    function index(){

        $foodData = foodmenu::getmenuData();

        return view('food_menu')-> with("foodData",$foodData);
    
    }


}
