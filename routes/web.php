<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> ['admin']],function(){

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@index1')->name('profile');