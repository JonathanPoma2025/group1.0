<?php

use Illuminate\Support\Facades\Route;
use App\Models\Brand;

Route::get('cars/car.edit', function () {
    return view('cars.caredit');
});

Route::get('cars/create', function () {
    return view('cars.create', [
        'brands' => Brand::all(),
        
    ]);
});