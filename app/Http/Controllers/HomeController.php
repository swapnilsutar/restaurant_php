<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('profile');
    }

    public function profileupdate(Request $request){

        // return view('my-profile-update');
        $user_id = Auth::User()->id;

        $user = User::findOrFail($user_id);

        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('city');
        $user->district = $request->input('district');
        $user->state = $request->input('state');
        $user->pincode = $request->input('pincode');
        
        $user->phone = $request->input('phone');
        
        $user->alternate_phone = $request->input('alternate_phone');

        
        // if(!$user->update())
        // {
        //     return view("/");
        // }
            $user->update();
        return redirect('/profile')->with('status','Yout profile is succesfully Updated');  


    }

}
