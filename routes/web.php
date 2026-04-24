<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/history', [PageController::class, 'history']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/usermanage', [PageController::class, 'usermanage']);
Route::get('/eventmanage', [PageController::class, 'eventmanage']);
Route::get('/detail', [PageController::class, 'detail']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/checkout', [PageController::class, 'checkout']);