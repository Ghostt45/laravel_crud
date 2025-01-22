<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::resource('users', UserController::class)->only(['index', 'create', 'store']);
Route::resource('projects', ProjectController::class)->only(['index', 'create', 'store']);
Route::resource('tasks', TaskController::class)->only(['index', 'create', 'store']);


Route::patch('/tasks/{task}/status/{action}', [TaskController::class, 'updateStatus'])->name('task.status');


Route::get('/user/{id}/view', [UserController::class, 'viewImage'])->name('user.viewImage');
