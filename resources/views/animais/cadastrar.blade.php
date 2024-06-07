{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')

<p> Preencha o formulário </p>

<form method="post" action="{{ route('animais.gravar') }}">
    <input type="text" name="nome" placeholder="Nome">
    <input type="number" name="idade" placeholder="Idade">
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection