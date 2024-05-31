<?php

use Illuminate\Support\Facades\Route;

Route::get('cars/create', function () {
    return view('cars.create');
});

Route::get('cars/calendar', function () {
    return view('cars.calendar');
});
