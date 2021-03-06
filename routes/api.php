<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestGuzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dangki', [RegisterController::class,'create'])->name('register.create');
Route::get('/test', [TestGuzzle::class,'getApiGuzzle'])->name('test.getApiGuzzle');

Route::post('dangnhap', [LoginController::class,'authenticate'])->name('login.authenticate');

