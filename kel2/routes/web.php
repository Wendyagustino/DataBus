<?php

use Illuminate\Support\Facades\Route;

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
