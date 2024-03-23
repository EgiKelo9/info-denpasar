<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Beranda"
    ]);
});
Route::get('/tourism', function () {
    return view('tourism', [
        "title" => "Wisata"
    ]);
});
Route::get('/information', function () {
    return view('information', [
        "title" => "Informasi"
    ]);
});
Route::get('/service', function () {
    return view('service', [
        "title" => "Layanan"
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/news', [PostController::class, 'index']);
Route::get('news/1', [PostController::class, 'index']);
