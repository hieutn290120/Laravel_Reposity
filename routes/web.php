<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccoutController;


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

Route::get('/', function () {
    return view('page.home');
});

// Dang nhap && Dang Ki
Route::get('dangki', [UserController::class,'index'])->name('register.index');
Route::get('dangnhap', [AccoutController::class,'index'])->name('register.index');

Route::post('dangnhap', [AccoutController::class,'store'])->name('login.store');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('trangchu');
