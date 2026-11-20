<?php

use Illuminate\Support\Facades\Route;

// --- Member 1 — Home page
Route::get('/', function () {
    return view('home');
});

// --- Member 2 — About page
Route::get('/about', function () {
    return view('about');
});

// --- Member 3 — Contact page
Route::get('/contact', function ()
    { return view('contact');
});
