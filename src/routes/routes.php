<?php

use Illuminate\Support\Facades\Route;

Route::prefix('laravel-iide-helper')->group(function () {
    Route::get('/', function () {
        return 'Hello from my package!';
    });
});