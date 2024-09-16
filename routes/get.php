<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Models\Maintenance;
use App\Models\Repairshops;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/users/type', function() {
        return view('users.usersType');
    });

    Route::get('user/profile', [UserController::class, 'showProfile'])->name('users.profile');

    #Rutas para el taller :)
    Route::get('repairshops/home', function () {
        return view('repairshops.account', [
            'mecanico' => Auth::user()->load('repairshop')
        ]);
    })->name('repairshops.home');

    Route::get('repairshops/addcostumer', [ClientController::class, 'create'])->name('clients.create');

    Route::get('repairshops/clients', [ClientController::class, 'index'])->name('clients.index');

    Route::get('repairshops/create', function () {
        return view('repairshops.create');
    })->name('repairshops.create');

    Route::get('repairshops/updatetaller', function () {
        return view('repairshops.updatetaller');
    })->name('repairshops.updatetaller');

    Route::get('/maintenance/create', function () {
        return view('cars.maintenance', [
            'clients' => Repairshops::where('user_id', Auth::user()->id)
        ]);
    })->name('maintenance.create');

    Route::get('/clients/{user}/{vehicle}', [VehicleController::class, 'carDetails'])->name('clients.details');


    #Rutas para el cliente :)
    Route::get('clients/home', function () {
        return view('users.home', [
            'client' => Auth::user()->load('cars', 'cars.brand', 'cars.carType')
        ]);
    })->name('clients.home');

    Route::get('cars/create', [VehicleController::class, 'create'])->name('cars.create');

    Route::get('recommendations', function () {
        return view('repairshops.recomendations');
    })->name('recommendations');

    Route::get('cars/edit/{vehicle}', [VehicleController::class, 'edit'])->name('cars.caredit');
    Route::put('cars/update/{vehicle}', [VehicleController::class, 'update'])->name('cars.update');
    Route::get('cars/record/{vehicle}', [VehicleController::class, 'record'])->name('cars.record');

});

Route::get('/user/update', function() {
    return view('users.update');
});

Route::get('users/viewclient', function () {
    return view('users.viewclient');
});

Route::get('/maintenance/index', function () {
    return view('repairshops.maintenances', [
        'maintenances' => Auth::user()->load('repairshop.clients', 'repairshop.clients.cars', 'repairshop.clients.cars.maintenances')
    ]);
})->name('clients.maintenances');
