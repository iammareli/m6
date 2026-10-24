<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Base route redirection to /tasks for convenience
Route::get('/', function () {
    return redirect('/tasks');
});

// Module 6 explicit routes
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);
