<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::prefix('message')->group(function () {
    Route::post('/submit', [MainController::class, 'submitMessage']);
});

Route::get('/', [MainController::class, 'main']);

