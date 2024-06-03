<?php

use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('users.register');
});

Route::get('/signin', function () {
    return view('users.login');
});

Route::get('/edit', function() {
       Return view('users.edituser');
});
