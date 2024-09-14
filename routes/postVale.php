<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RepairshopController;



Route::get('cars/create', [VehicleController::class, 'create'])->name('cars.create');

Route::post('cars/store', [VehicleController::class, 'store'])->name('cars.store');

Route::get('user/profile', [UserController::class, 'showProfile'])->name('users.profile');

Route::get('cars/edit/{vehicle}', [VehicleController::class, 'edit'])->name('cars.caredit');

Route::put('cars/update/{id}', [VehicleController::class, 'update'])->name('cars.update');







