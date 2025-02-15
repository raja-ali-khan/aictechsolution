<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coming-soon');
});

// local
// staging - testing
// production
if(env('APP_ENV') == 'local'){
    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/about-us', function () {
        return view('about-us');
    });

    Route::get('/contact-us', function () {
        return view('contact-us');
    });

    Route::get('/services', function () {
        return view('services');
    });
}
