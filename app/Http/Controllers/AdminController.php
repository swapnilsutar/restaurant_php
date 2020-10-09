<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminA;
use App\User;

class AdminController extends Controller
{
    function userAccess(){

        $usersData = AdminA::usersData();

        return view('admin.dashboard')->with("udata",$usersData);
    }

    function indexall(){
        
        $usersData = AdminA::usersData();

        return view('admin.user')->with("udata",$usersData);
    }

    public function role_edit(Request $req,$id){

        $userid = User::findOrFail($id);

        return view('admin.register_edit')->with('user',$userid);

    }

    public function role_update(Request $req, $id){

        $user = User::find($id);

        $user->name = $req->input('name');
        $user->userType = $req->input('userType');
        
        $user->update();

        return redirect('/userprofile')->with('status','Succesfully Updated');

    }
}
