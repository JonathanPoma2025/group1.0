<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/user/register', function () {
    return view('users.register');
})->name('register');

Route::get('/user/login', function () {
    return view('users.login');
})->name('login');

Route::get('/user/profile', function() {
    return view('users.profile', [
        'user' => Auth::user()->load('cars'),
    ]);
})->name('Profile');

Route::get('/user/update', function() {
    return view('users.update');
});
