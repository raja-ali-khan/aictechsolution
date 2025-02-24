<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

// testing api start
use App\Http\Controllers\CurrencyController;
// testing api end

// Route::get('/', function () {
//     return view('coming-soon');
// });

// local
// production
// if (env('APP_ENV') == 'local') {
    Route::get('/', function () {
        $data = [
            'header_type' => 'index'
        ];
        return view('index', $data);
    })->name('index');

    Route::get('/about-us', function () {

        $data = [
            'header_type' => 'about-us'
        ];
        return view('about-us', $data);
    })->name('about-us');

    Route::get('/contact-us', function () {
        $data = [
            'header_type' => 'contact-us'
        ];
        return view('contact-us', $data);
    })->name('contact-us');

    Route::get('/services', function () {
        $data = [
            'header_type' => 'services'
        ];
        return view('services', $data);
    })->name('services');

    Route::get('/solution', function () {
        $data = [
            'header_type' => 'solution'
        ];
        return view('solution', $data);
    })->name('solution');
    Route::post('/contact-us', [ContactFormController::class, 'store']);


    // testing api

    Route::get('/exchange-rates', [CurrencyController::class, 'showExchangeRates']);
    Route::post('/convert', [CurrencyController::class, 'convertCurrency'])->name('convert.currency');
// }
