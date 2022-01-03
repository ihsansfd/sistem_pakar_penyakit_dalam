<?php

use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "Sistem Pakar Penyakit Dalam"
    ]);
    
});
Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
    
});
Route::get('/login', [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post('/login', [LoginController::class, "login"])->middleware("guest");
Route::post('/logout', [LoginController::class, "logout"])->middleware("auth");
Route::get('/register', [RegisterController::class, "index"])->middleware("guest");
Route::post('/register', [RegisterController::class, "register"])->middleware("guest");

Route::resource("/konsultasi", KonsultasiController::class)->middleware("auth");