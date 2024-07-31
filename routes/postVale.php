<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ClientController;

Route::get('cars/create', [VehicleController::class, 'create'])->name('cars.create');

Route::post('cars/store', [VehicleController::class, 'store'])->name('cars.store');

Route::get('user/profile', [UserController::class, 'showProfile'])->name('users.profile');

Route::get('cars/edit/{vehicle}', [VehicleController::class, 'edit'])->name('cars.caredit');

Route::put('cars/update/{id}', [VehicleController::class, 'update'])->name('cars.update');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');




#Rutas para clientes del taller :)
Route::get('repairshops/addcostumer', [ClientController::class, 'create'])->name('clients.create');

Route::post('repairshops/addcostumer', [ClientController::class, 'store'])->name('clients.store');

Route::get('repairshops/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('<repairshops/clients/{email}', [ClientController::class, 'show'])->name('clients.show');
