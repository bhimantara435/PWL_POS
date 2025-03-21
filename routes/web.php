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
Route::get('/user/tambah',[UserController::class, 'tambah']) ;
Route::post('/user/tambah_simpan',[UserController::class, 'tambah_simpan']) ;
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController :: class, 'ubah_simpan']);
Route::get('/user/hapus/{id}',[UserController::class, 'hapus']);


