<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\tambahBeritaController;

Route::get('/', function () {
    return redirect('/login');
})->middleware('auth');

Route::get('/home', function () {
    // You can change this to whatever you want to display on the home page
    return view('home');
});

Route::get('/homeGuest', function () {
    // You can change this to whatever you want to display on the home page
    return view('homeGuest');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignupController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

Route::get('/pesanan', function () {
    return view('pesanan');
})->middleware('auth');

Route::get('/tambahberita', [tambahBeritaController::class, 'index'])->name('tambahBerita.index');
Route::post('/tambahberita', [tambahBeritaController::class, 'store'])->name('tambahBerita.store');
