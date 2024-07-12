<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/navigationbarcliente', function () {
    return view('components.navigationbarcliente');
});

Route::get('/maintenance/create', function () {
    return view('cars.maintenance');
});

Route::get('/navigationbartaller', function () {
    return view('components.navigationbartaller');
});

