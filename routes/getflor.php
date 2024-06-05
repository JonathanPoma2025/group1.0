<?php

use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('users.register');
})->name('register');

Route::get('/signin', function () {
    return view('users.login');
})->name('login');

Route::get('/edit', function() {
    return view('users.edituser');
});
