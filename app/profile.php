<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


class profile extends Model
{
    public static function getuserdata(){

        $profile_view = DB::table('users')->get();

        return $profile_view;

    }
}
