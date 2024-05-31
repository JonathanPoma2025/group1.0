<?php

use App\Http\Controllers\RepairshopController;
use App\Models\Repairshop;
use Illuminate\Support\Facades\Route;

Route::post('register', [RepairshopController::class, 'create']);
