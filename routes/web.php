<?php

use Illuminate\Support\Facades\Route;

// --- Member 1 — Home page
Route::get('/home', function () {
    return view('home');
});

// --- Member 2 — About page
Route::get('/about', function () {
    return view('about');
});

// --- Member 3 will add the Contact route here:
// Route::get('/contact', function () { return view('contact'); });
