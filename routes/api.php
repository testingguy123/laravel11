<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Get all users
Route::get('users', [UserController::class, 'index']);

// Get a single user by ID
Route::get('user/{id}', [UserController::class, 'show']);

