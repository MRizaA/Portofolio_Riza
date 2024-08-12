<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});