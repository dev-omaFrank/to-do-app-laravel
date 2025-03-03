<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'home'])->name('home');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/delete/{task}', [TaskController::class, 'delete'])->name('tasks.delete');

Route::post('/create', [TaskController::class, 'savecreate']);

Route::post('/edit', [TaskController::class, 'saveEdit']);

Route::post('/delete', [TaskController::class, 'doDelete']);
