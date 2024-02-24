<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('login',function()
{
    return view('Login');
})->name('login');
Route::get('signup',function()
{
    return view('signup');
})->name('signup');
Route::get('loginerror',function()
{
return view('Loginerror');
})->name('loginerror');

Route::get('/',function()
{
    return view('Firstpage');
})->name('firstpage');

Route::get('profile/{name}',function($name)
{   
    return view('profile',[
        'name'=> $name
    ]);
})->name('profile');
