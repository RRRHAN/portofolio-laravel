<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::prefix('message')->group(function () {
    Route::post('/', [MainController::class, 'submitMessage']);
    Route::put('/{id}', [MainController::class, 'updateMessage']);
    Route::delete('/{id}', [MainController::class, 'deleteMessage']);
});

Route::get('/', [MainController::class, 'main']);

