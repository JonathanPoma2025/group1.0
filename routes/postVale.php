<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::patch('/cars/create/{vehicle}', [VehicleController::class, 'update']);