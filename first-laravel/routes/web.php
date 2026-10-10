<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Halo Programmer laravel";
});

Route::get('/ifandika', function () {
    return (
        "
        <h1></h1>
        "
    );
});