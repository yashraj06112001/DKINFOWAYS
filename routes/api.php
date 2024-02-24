<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\handle;
use App\Http\Controllers\showStock;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('handleLogin',[handle::class, 'handleLogin'])->name('handlelogin');
Route::post('handlesignup',[handle::class, 'handlesignup'])->name('handlesignup');
Route::post('handlebutton1',[handle::class, 'handlebutton1tologin'])->name('handlebutton1');
Route::post('handlebutton2',[handle::class, 'handlebutton2tologin'])->name('handlebutton2');
Route::post('handlestock',[handle::class , "handlestock"]);
Route::get('stockshow',[showStock::class,"show"])->name('stockshow');