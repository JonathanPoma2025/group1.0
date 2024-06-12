<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::post('cars/store', [VehicleController::class, 'store']);
