<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/user/profile', function() {
    return view('users.profile', [
        'user' => Auth::user(),
        'cars' => Auth::user()->cars()
    ]);
});

Route::get('/update', function() {
    return view('users.update');
});
