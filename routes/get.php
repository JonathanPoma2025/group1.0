<?php

use App\Models\Repairshops;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/users/type', function() {
    return view('users.usersType');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/user/register', function () {
    return view('users.register');
})->name('register');

Route::get('repairshops/home', function () {
    //dd(Auth::user()->load('repairshops'));
    return view('repairshops.account', [
        'mecanico' => Auth::user()->load('repairshop')
    ]);
});


Route::get('/user/profile', function() {
    return view('users.profile', [
        'user' => Auth::user()->load('cars'),
    ]);
})->name('Profile');

Route::get('/user/update', function() {
    return view('users.update');
});

