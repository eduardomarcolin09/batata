<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index() {
        // pegando todos dados
        $dados = Animal::all();
        // ter certeza que veio tudo..       dd($dados);
        return view('animais/index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('animais.cadastrar');
    }

    public function gravar(Request $form) {
        # dd($form);

        // Antes de registrar tem que validar os dados

        $dados = $form->validate([       // required = obrigatório - integer = inteiro - min:3 = minimo 3 caracteres 
            'nome' => 'required|min:3',   
            'idade' => 'required|integer'                            
        ]);
        // Criando um registro dentro da model animal
        Animal::create($dados);
        
        return redirect()->route('animais');
    }

    // Animal $animal ta dizendo que o tipo é "animal" dai assim tras os dados do animal, se deixar só o $animal trás somente o id
    public function apagar(Animal $animal) {
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }
}
