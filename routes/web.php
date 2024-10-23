<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // merujuk ke file index.blade
});

Route::get('/welcome', function () {
    return view('welcome'); // merujuk  
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});