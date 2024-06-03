<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RepairshopController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [RepairshopController::class, 'login']);

Route::post('/register', [RepairshopController::class, 'create']);

Route::post('users/{$id}/edit', [RepairshopController::class, 'update']);

