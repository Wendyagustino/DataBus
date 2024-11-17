<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('layout.app');
});
Route::get('/adib', function () {
    return view('user.adib');
});
Route::get('/rizki', function () {
    return view('user.rizki');
});
Route::get('/wendy', function () {
    return view('user.wendy');
});
Route::get('/zahwa', function () {
    return view('user.zahwa');
});

Auth::routes();
Route::middleware([Authenticate::class])->group(function () {
    Route::resource('anggota', AnggotaController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
