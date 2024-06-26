<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;


#Route::middleware('auth')->group(function(){
Route::get('cars/create', [VehicleController::class, 'create'])->name('cars.create');
Route::post('cars/store', [VehicleController::class, 'store'])->name('cars.store');
Route::get('/user/profile', [UserController::class, 'show'])->name('user.profile');
#});
