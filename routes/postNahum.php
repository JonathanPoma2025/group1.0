<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/users/type', function() {
    return view('users.usersType');
});

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'create']);

Route::post('users/{$id}/edit', [UserController::class, 'update']);

