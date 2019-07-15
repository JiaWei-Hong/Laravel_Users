<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserController@index');
Route::get('/delete/{id}','UserController@userDelete');

Route::post('/adduser','UserController@userAdd');
Route::post('/search','UserController@userSearch');

Route::patch('/modify/{id}','UserController@userUpdate');

// Route::get('/test',function(){  //Hash 
//     $userPwd = Hash::make('1234');

//     $res = Hash::check('1234',$userPwd);
// });

Route::middleware('check')->get('/check/{age}',function($age){
    return $age;
});
