<?php

use Illuminate\Support\Facades\Route;

Route::prefix('laravel-iide-helper')->group(function () {
    

    Route::get('/sql-query', 'laravelhelper\LaravelIideHelper\Controllers\SqlQueryController@index');
    Route::post('/sql-query', 'laravelhelper\LaravelIideHelper\Controllers\SqlQueryController@executeQuery')->name('executeQuery');
});