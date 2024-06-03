<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::patch('/cars/update/{vehicle}', [VehicleController::class, 'update']);