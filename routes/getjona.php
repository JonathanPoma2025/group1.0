<?php

use Illuminate\Support\Facades\Route;

Route::get('repairshops/create', function () {
    return view('repairshops.create');
} );

Route::get('repairshops/clients', function () {
    return view('repairshops.clients');
} );

Route::get('repairshops/account', function () {
    return view('repairshops.account');
} );

