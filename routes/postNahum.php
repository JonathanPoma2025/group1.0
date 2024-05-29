<?php

use App\Http\Controller\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'create']);

Route::post('users/{$id}/edit', [UserController::class, 'update']);
