<?php

use Illuminate\Support\Facades\Route;
use App\Models\Brand;
use App\Models\CarType;

Route::get('cars/car.edit', function () {
    return view('cars.caredit');
});

Route::get('cars/create', function () {
    return view('cars.create', [
        'brands' => Brand::all(),
        'car_types' =>CarType::all(),
       
    ]);
    
});

Route::get('users/home', function () {
  return view('users.home');
});


