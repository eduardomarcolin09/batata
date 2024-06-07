<?php

use App\Http\Controllers\AnimaisController;
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