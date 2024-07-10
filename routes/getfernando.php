<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/navigationbar', function () {
    return view('components.navigationbar');
});

Route::get('/maintenance/create', function () {
    return view('cars.maintenance');
});

