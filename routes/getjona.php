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

