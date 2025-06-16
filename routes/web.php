<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendedorController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/produtos', function () {
    return view('produtos.index');
})->middleware('auth');

// Produtos Routes

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');

// Jogos Routes

Route::get('/produtos/novo-jogo', [JogoController::class, 'view'])->name('jogos.create');
Route::post('/produtos/novo-jogo', [JogoController::class, 'store'])->name('jogos.store');
Route::resource('jogos', JogoController::class)->except(['show', 'index']);

// Filmes Routes

Route::get('/produtos/novo-filme', [FilmeController::class, 'view'])->name('filmes.create');
Route::post('/produtos/novo-filme', [FilmeController::class, 'store'])->name('filmes.store');
Route::resource('filmes', FilmeController::class)->except(['show', 'index']);

// Livros Routes

Route::get('/produtos/novo-livro', [LivroController::class, 'view'])->name('livros.create');
Route::post('/produtos/novo-livro', [LivroController::class, 'store'])->name('livros.store');
Route::resource('livros', LivroController::class)->except(['show', 'index']);

// Usuarios routes
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');

// Vendedores routes
Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedores.index');

Auth::routes();