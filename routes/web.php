<?php

use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Controllers\StudentController;

Route::get('/ ', function () {
    return view('welcome');
});

// Route::get('getname/{name}', [UserController::class, 'getUserName']);
Route::get('admin', [UserController::class, 'adminLogin']);
Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about/{about}', [UserController::class, 'userAbout']);
Route::post('addUser', [UserController::class,'addUser']);

Route::controller(UserController::class)->group(function(){
    Route::get('admin', 'adminLogin');
    Route::get('getname/{name}', 'getUserName');
    Route::get('user-home', 'userHome');
    Route::get('user-about/{about}', 'userAbout');
    Route::get('addUser', 'addUser');
});

// Route::get('/home ', function () {
//     return view('home');
// });

//  Route::view('/home','home'); 

 Route::view('user-form','user-form')->middleware(CountryCheck::class);;

 Route::view('/newabout/{about}','newabout');

 Route::view('/Home2', 'Home2')->middleware([AgeCheck::class, CountryCheck::class]);

 Route::get('users',[UserController::class, 'users']);

 Route::get('student', [StudentController::class, 'getStudent']);

 Route::get('API', [UserController::class, 'getApiUser']);

// Route::get('/about/{name} ', function($name)
// {
//     return view('about', ['name' => $name]);
// });

// route::redirect('/home','/');

 Route::view('url-home','urlhome');
//  Route::view('home','urlhome');
 Route::view('url-about/{name}','urlabout');
// Route::view('/welcome','welcome');


