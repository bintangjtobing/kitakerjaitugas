<?php

use Illuminate\Support\Facades\Route;

Route::prefix('smm')->group(function () {
    Route::get('/instagram', function () {
        return Redirect::to('http://www.instagram.com/kitakerjaintugas');
    });
    Route::get('/facebook', function () {
        return Redirect::to('http://www.facebook.com/kitakerjaintugas');
    });
});

Route::get('/', function () {
    return view('welcome');
});
