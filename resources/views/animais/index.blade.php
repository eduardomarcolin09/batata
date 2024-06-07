{{-- resources/views/animais/index.nlade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')

<p> Veja nossa lista de animais para adoção</p>
<p>
    <a href="{{ route('animais.cadastrar') }}">Cadastrar animal</a>
</p>

@endsection