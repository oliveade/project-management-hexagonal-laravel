<?php

use Illuminate\Support\Facades\Route;
use App\Infrastructure\Http\Controller\ProjectController;

Route::post('/projects', [ProjectController::class, 'create']);
Route::post('/projects/{id}/tasks', [ProjectController::class, 'addTask']);
Route::get('/', function () {
    return view('welcome');
});
