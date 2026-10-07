<?php

use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama?}/{npm?}/{kelas?}', [ProfileController::class, 'profile']);

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{mataKuliah}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::patch('/matakuliah/{mataKuliah}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{mataKuliah}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
