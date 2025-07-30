<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuruController::class, "index"])->name('guru.index');
Route::get('/create', [GuruController::class, "create"])->name('guru.create');
Route::get('/edit/{id}', [GuruController::class, "edit"])->name('guru.edit');
Route::post('/guru/store', [GuruController::class, "store"])->name('guru.store');
Route::delete('/guru/{id}', [GuruController::class, "destroy"])->name('guru.destroy');
Route::put('/guru/{id}', [GuruController::class, "update"])->name('guru.update');
