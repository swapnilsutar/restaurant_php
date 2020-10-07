<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;

class profileController extends Controller
{
    function index(){

        $v = profile::getuserdata();

        return view('profile')->with("user_info",$v);
    }
}
