<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminA;

class AdminController extends Controller
{
    function userAccess(){

        $usersData = AdminA::usersData();

        return view('admin.dashboard')->with("udata",$usersData);
    }
}
