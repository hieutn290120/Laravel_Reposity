<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('dangki', [UserController::class,'index'])->name('register.index');

Route::post('dangki', [UserController::class,'create'])->name('register.create');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('trangchu');
