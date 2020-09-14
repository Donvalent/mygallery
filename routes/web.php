<?php

use Illuminate\Support\Facades\Route;

Route::get('/','CategoryController@index')->name('new');

Route::get('/new','CategoryController@index')->name('new');

Route::get('/popular','CategoryController@index')->name('popular');

Route::get('/memes','CategoryController@index')->name('memes');
