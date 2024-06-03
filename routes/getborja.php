<?php

use Illuminate\Support\Facades\Route;

Route::get('cars/car.edit', function () {
    return view('cars.caredit');
});

Route::get('cars/create', function () {
    return view('cars.create');
});