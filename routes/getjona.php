<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Repairshops;

Route::get('repairshops/create', function () {
    return view('repairshops.create');
} );

Route::get('repairshops/clients', function () {
    return view('repairshops.clients');
} );


Route::get('repairshops/account', function () {
    return view('repairshops.account', [
        'talleres' => Repairshops::all()
        //Auth::user()->repairshops()->get()
    ]);
});

Route::get('roles', function () {
    return view('users.usersType');
} );

Route::get('recomendations', function () {
    return view('repairshops.recomendations');
} );


Route::get('repairshops/updatetaller', function () {
    return view('repairshops.updatetaller');
});

Route::get('repairshops/addcostumer', function () {
    dd(Repairshops::where('user_id', Auth::user()->id)->get());
    return view('repairshops.addcostumer', [
        'talleres' => Repairshops::where('user_id', Auth::user()->id)->get()
    ]);
});
