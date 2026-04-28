<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;

// halaman home
Route::get('/', [EventController::class, 'index']);

// detail event
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

// dashboard admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);