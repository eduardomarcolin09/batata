<?php

namespace App\Http\Controllers;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filme::all();
        return view('filmes/index', [
            'filmes' => $dados,
        ]);
    }
    
    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        # dd($form);

        $dados = $form->validate([      
            'título' => 'required',   
            'diretor' => 'required',
            'ano_de_lançamento' => "required",
            'duração' => "required"                            
        ]);
        // Criando um registro dentro da model animal
        Filme::create($dados);
        
        return redirect()->route('filmes');
    }


}
