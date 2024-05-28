<?php

use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('register');
});

Route::get('/signin', function () {
    return view('login');
});
