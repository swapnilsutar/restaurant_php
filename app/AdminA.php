<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class AdminA extends Model
{
    public static function usersData(){

        $u =DB::table('users')->get();
        
        return $u;
    }
    
}
