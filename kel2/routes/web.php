<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Tambahkan route autentikasi
Auth::routes();
// Middleware auth untuk proteksi route anggota
Route::middleware(['auth'])->group(function () {
    Route::resource('anggota', AnggotaController::class);
    Route::get('/anggota/{name}', [AnggotaController::class, 'show']);

});

// Route default
Route::get('/', function () {
    return view('layout.app');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});