<?php

use Illuminate\Support\Facades\Route;

Route::get('/navigationbarcliente', function () {
    return view('components.navigationbarcliente');
});

Route::get('/maintenance/create', function () {
    return view('cars.maintenance');
});

Route::get('/navigationbartaller', function () {
    return view('components.navigationbartaller');
});

Route::get('users/viewclient', function () {
    return view('users.viewclient');
});
