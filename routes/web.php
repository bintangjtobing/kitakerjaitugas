<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::prefix('smm')->group(function () {
    Route::get('/instagram', function () {
        return Redirect::to('http://www.instagram.com/run.statistik');
    });
    // Route::get('/facebook', function () {
    //     return Redirect::to('http://www.facebook.com/kitakerjaintugas');
    // });
});

Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('home.about');
});
