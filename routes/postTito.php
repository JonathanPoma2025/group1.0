<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RepairshopController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [RepairshopController::class, 'login']);

Route::post('users/{$id}/edit', [RepairshopController::class, 'update']);

Route::post('users/{$id}/edit', [RepairshopController::class, 'delete']);
