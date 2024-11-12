<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::get('/', [UserController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);