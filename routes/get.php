<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/singin', function () {
    return view('login');
});
