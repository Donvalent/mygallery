<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('new');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/popular', function () {
    return view('popular');
});
