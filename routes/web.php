<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

// ================= HOME =================
Route::get('/', [EventController::class, 'index'])->name('home');

// ================= EVENT =================
Route::prefix('events')->group(function () {

    // 🔥 CREATE & STORE (HARUS DI ATAS)
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/', [EventController::class, 'store'])->name('events.store');

    // 🔥 DETAIL EVENT (HARUS DI BAWAH)
    Route::get('/{slug}', [EventController::class, 'show'])->name('events.show');
});

// ================= ADMIN =================
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// ================= PAGE =================
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/usermanage', [PageController::class, 'usermanage'])->name('usermanage');
Route::get('/eventmanage', [PageController::class, 'eventmanage'])->name('eventmanage');

// ❗ OPTIONAL (kalau tidak dipakai, bisa dihapus biar tidak bingung)
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

// ================= DETAIL =================
Route::get('/detail/{id}', [PageController::class, 'detail'])->name('detail');