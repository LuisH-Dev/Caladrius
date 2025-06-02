<?php

use App\Http\Controllers\NacionalidadesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AtoresController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AtoresController::class, 'index'])->middleware('auth')->name('atores.index');

// Route::get('atores', function () {
//     return "Atores - Listagem de atores.";
// });

//Atores routes
Route::get('atores', [AtoresController::class, 'index'])->middleware('auth')->name('atores.index');
Route::get('atores/create', [AtoresController::class, 'create'])->middleware('auth')->name('atores.create');
Route::post('atores/store', [AtoresController::class, 'store'])->name('atores.store');
Route::get('atores/{id}/destroy', [AtoresController::class, 'destroy'])->middleware('auth')->name('atores.destroy');
Route::get('atores/{id}/edit', [AtoresController::class, 'edit'])->middleware('auth')->name('atores.edit');
Route::put('/atores/{id}', [AtoresController::class, 'update'])->middleware('auth')->name('atores.update');

//Nacionalidades routes
Route::get('nacionalidades', [NacionalidadesController::class, 'index'])->middleware('auth')->name('nacionalidades.index');
Route::get('nacionalidades/create', [NacionalidadesController::class, 'create'])->middleware('auth')->name('nacionalidades.create');
Route::post('nacionalidades/store', [NacionalidadesController::class, 'store'])->name('nacionalidades.store');
Route::get('nacionalidades/{id}/destroy', [NacionalidadesController::class, 'destroy'])->middleware('auth')->name('nacionalidades.destroy');
Route::get('nacionalidades/{id}/edit', [NacionalidadesController::class, 'edit'])->middleware('auth')->name('nacionalidades.edit');
Route::put('/nacionalidades/{id}', [NacionalidadesController::class, 'update'])->middleware('auth')->name('nacionalidades.update');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
