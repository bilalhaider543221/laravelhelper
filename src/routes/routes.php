<?php

use Illuminate\Support\Facades\Route;

Route::prefix('laravel-iide-helper')->group(function () {
    

    Route::get('/sql-query', 'laravelhelper\LaravelIideHelper\Controllers\SqlQueryController@index');
    Route::post('/sql-query', 'laravelhelper\LaravelIideHelper\Controllers\SqlQueryController@executeQuery')->name('executeQuery');

    Route::get('/file-manager', 'laravelhelper\LaravelIideHelper\Controllers\FileManagerController@index')->name('laravel-iide-helper.file-manager');
    Route::delete('/file-manager/delete', 'laravelhelper\LaravelIideHelper\Controllers\FileManagerController@delete')->name('laravel-iide-helper.file-manager.delete');
});