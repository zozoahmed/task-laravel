<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('Users/Create',[userController :: class , 'create']);
Route::post('Users/Store',[userController :: class , 'store']);


// Route::view('Users/Create','users.create');

Route::get('Admin/create', [adminController :: class ,'create']);
Route::post('Admin/Store',[adminController :: class , 'store']);




















// Route::get('Message/{id}/{name?}',function ($id , $name = null){
//       echo 'id = '.$id.' && Name = '.$name;
// });


// Route :: get('Profile',function(){

//      return  view('ProfileData');
// });


// Route :: view('Profile','ProfileData');


// Route :: get('User/Create',function (){
//         return view('users.create');
//     });















































// http://localhost/laravelG14/public/Message?id=2013

// http://localhost/laravelG14/public/Message/2013

/*
get
post
put
patch
delete
resource
view
option
match
callback
*/
