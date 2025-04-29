<?php

use Illuminate\Support\Facades\Route;

Route::get('/print',
[\App\Http\Controllers\ReceiptController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    event(new \App\Events\TestingEvent());
    return 'Event has been sent';
});
