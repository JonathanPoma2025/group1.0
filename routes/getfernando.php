<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('components.perfil');
});

