<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/users/type', function() {
    return view('users.usersType');
});

Route::post('/users/type', [UserController::class, 'editType']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/user/logout', [UserController::class, 'logout']);

Route::post('/register', [UserController::class, 'create']);

Route::post('users/{$id}/edit', [UserController::class, 'update']);

Route::post('')

