<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animais', 
// Quando eu acessar a rota, vai pegar a classe AnimaisController e vai executar a função Index
[AnimaisController::class, 'index'])->name('animais');

Route::get('animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');

// Podemos ter varias rotas com o mesmo nome/endereço porém com METÓDOS DIFERENTES 

Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar'])->name('animais.gravar');

// Animais ta sendo passado por parametro para saber qual vai ser apagado
Route::get('/animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('/animais/apagar/{animal}', [AnimaisController::class, 'apagar']);


// Trabalho

Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');

Route::get('/filmes/cadastrar', [FilmesController::class, 'cadastrar'])->name('filmes.cadastrar');

Route::post('/filmes/cadastrar', [FilmesController::class, 'gravar'])->name('filmes.gravar');

Route::get('/filmes/editar/{filme}', [FilmesController::class, 'editar'])->name('filmes.editar');
Route::put('/filmes/editar/{filme}', [FilmesController::class, 'editarGravar']);