<p> Veja nossos filmes</p>

<p>
    <a href="{{ route('filmes.cadastrar') }}">Cadastrar Filme</a>
</p>


<table border=1>
    <tr>
        <th>Título</th>
        <th>Diretor</th>
        <th>Ano_de_Lançamento</th>
        <th>Duração</th>
    </tr>
    @foreach ($filmes as $filme)
    <tr>
        <td>{{ $filme['título'] }}</td>
        <td>{{ $filme['diretor'] }}</td>
        <td>{{ $filme['ano_de_lançamento']}}</td>
        <td>{{ $filme['duração']}}</td>
        {{-- <td> <a href="{{ route('animais.apagar', $animal['id'])}}">Apagar</a></td> --}}
    </tr>
    @endforeach
</table>