<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\levelController;
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

Route::get('/', function () {
    return view('welcome');


});

Route::get('/level',[levelController::class, 'index']);
Route::get('/kategori',[kategoriController::class, 'index']);
Route::get('/user',[UserController::class, 'index']);

