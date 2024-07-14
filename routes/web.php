<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ResepController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [KelasController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// kelas
Route::get('/kelas', [KelasController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.classes.index');
Route::post('/kelas/data', [KelasController::class, 'getData'])->middleware(['auth', 'verified'])->name('admin.classes.data');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.classes.destroy');

// resep
Route::get('/resep', function () {return view('admin.recipes.index');})->middleware(['auth', 'verified'])->name('resep');
Route::post('/resep/data', [ResepController::class, 'getData'])->middleware(['auth', 'verified'])->name('admin.recipes.data');
Route::delete('/resep/{id}', [ResepController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.recipes.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
