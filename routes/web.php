<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('coming-soon');
});

// local
// production
if (env('APP_ENV') == 'local') {
    Route::get('/index', function () {
        $data = [
            'header_type' => 'index'
        ];
        return view('index', $data);
    });

    Route::get('/about-us', function () {

        $data = [
            'header_type' => 'about-us'
        ];
        return view('about-us', $data);
    });

    Route::get('/contact-us', function () {
        $data = [
            'header_type' => 'contact-us'
        ];
        return view('contact-us', $data);
    });

    Route::get('/services', function () {
        $data = [
            'header_type' => 'services'
        ];
        return view('services', $data);
    });

    Route::get('/solution', function () {
        $data = [
            'header_type' => 'solution'
        ];
        return view('solution', $data);
    });
    Route::post('/contact-us', [ContactFormController::class, 'store']);
}
