<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Foodmenu extends Model
{
    public static function getmenuData(){

        $v = DB::table('foodmenus')->get();
        return $v;
    }   
}
