<?php

use Illuminate\Support\Facades\Route;
use App\Models\Repairshop;

Route::get('repairshops/create', function () {
    return view('repairshops.create');
} );

Route::get('repairshops/clients', function () {
    return view('repairshops.clients');
} );


Route::get('repairshops/account', function () {
    return view('repairshops.account', [
        'talleres' => Repairshop::all()
        //Auth::user()->repairshops()->get()
    ]);
});

Route::get('roles', function () {
    return view('users.usersType');
} );

Route::get('recomendations', function () {
    return view('repairshops.recomendations');
} );


<<<<<<< Updated upstream

=======
Route::get('/createprueba', function () {
    return view('repairshops.pruebacreate');
} );

Route::get('/addcostumer', function () {
    return view('repairshops.pruebacreate');
} );
>>>>>>> Stashed changes
