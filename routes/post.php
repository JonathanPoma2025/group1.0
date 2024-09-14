<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RepairshopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/users/type', [UserController::class, 'editType']);
Route::post('/repairshops/store', [RepairshopController::class, 'store']);
Route::post('/register', [UserController::class, 'create']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::post('users/{$id}/edit', [UserController::class, 'update']);
Route::post('repairshops/addcostumer', [ClientController::class, 'store'])->name('clients.store');
Route::get('repairshops/clients/{email}', [ClientController::class, 'show'])->name('clients.show');
