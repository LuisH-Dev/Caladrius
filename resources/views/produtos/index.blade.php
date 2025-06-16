@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Jogos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
            <tr>
                <td>{{ $jogo->titulo }}</td>
                <td>R$ {{ number_format($jogo->preco, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('jogos.edit', [$jogo->id]) }}" class="btn-sm btn-success">Editar</a>
                    <form action="{{ route('jogos.destroy', $jogo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja remover este item?')">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Filmes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filmes as $filme)
            <tr>
                <td>{{ $filme->titulo }}</td>
                <td>R$ {{ number_format($filme->preco, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('filmes.edit', [$filme->id]) }}" class="btn-sm btn-success">Editar</a>
                    <form action="{{ route('filmes.destroy', $filme->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja remover este item?')">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Livros</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr>
                <td>{{ $livro->titulo }}</td>
                <td>R$ {{ number_format($livro->preco, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('livros.edit', [$livro->id]) }}" class="btn-sm btn-success">Editar</a>
                    <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja remover este item?')">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
function ConfirmaExclusao(tipo, id) {
    if(confirm('Tem certeza que deseja remover este item?')) {
        // Redireciona para a rota de exclusão
        window.location.href = '/' + tipo + '/' + id + '/delete';
    }
    return false;
}
</script>
@endsection