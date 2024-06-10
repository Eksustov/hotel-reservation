<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apartments', function () {
    return view('apartments/index');
})->middleware(['auth', 'verified'])->name('apartments');;

Route::get('/apartments/{id}', [ApartmentController::class, 'show'])->name('apartments.show');

Route::get('/apartments-create', function () {
    return view('apartments/create');
})->middleware(['admin', 'verified'])->name('apartments-create');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
