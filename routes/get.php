<?php

use App\Http\Controllers\ClientController;
use App\Models\Repairshops;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/users/type', function() {
        return view('users.usersType');
    });

    Route::get('/user/register', function () {
        return view('users.register');
    })->name('register');

    Route::get('repairshops/home', function () {
        return view('repairshops.account', [
            'mecanico' => Auth::user()->load('repairshop')
        ]);
    })->name('repairshops.home');

    #Rutas para clientes del taller :)
    Route::get('repairshops/addcostumer', [ClientController::class, 'create'])->name('clients.create');

    Route::get('repairshops/clients', [ClientController::class, 'index'])->name('clients.index');
});




Route::get('/user/profile', function() {
    return view('users.profile', [
        'user' => Auth::user()->load('cars'),
    ]);
})->name('Profile');

Route::get('/user/update', function() {
    return view('users.update');
});

Route::get('recomendations', function () {
    return view('repairshops.recomendations');
} );


Route::get('repairshops/updatetaller', function () {
    return view('repairshops.updatetaller');
});



Route::get('repairshops/create', function () {
    return view('repairshops.create');
} );

