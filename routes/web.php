<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> ['admin']],function(){

    // Route::get('/admin', function () {
    //     return view('admin.dashboard','AdminController@userAccess');
    // });
    Route::get('/dashboard','AdminController@userAccess');

    Route::get('/userprofile','AdminController@indexall');
    
    Route::get('/register_edit/{id}','AdminController@role_edit');

    Route::put('/register_edit_update/{id}','AdminController@role_update');

});

Auth::routes();

Route::get('/home   ', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@index1')->name('profile');

Route::get('/allfood', 'HomeController@allfun')->name('allfood');


Route::post('/profile', 'HomeController@profileupdate');

Route::view('/menu','menu');
Route::view('/contact','contact');
Route::view('/reservation','reservation');

Route::get('/food_menu','menuController@index');


// Route::get('/profile','profileController@index');

