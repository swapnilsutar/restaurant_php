<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


class foodmenu extends Model
{
        public static function getmenuData(){

            $v = DB::table('food_menu')->get();
            return $v;
        }    
}   
