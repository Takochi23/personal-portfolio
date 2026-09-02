<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

// Route::get('/testimonials', function () {
//     return view('testimonials');
// });

Route::get('/contact', function () {
    return view('contact');
});
