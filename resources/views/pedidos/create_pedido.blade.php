@extends('adminlte::page')

@section('content')
    <h3>Criar novo pedido</h3>

    <form method="POST" action="{{ route('pedidos.store') }}">
        @csrf

        <div class="mb-3">
            <label for="id_usuario">Usuário:</label>
            <select name="id_usuario" class="form-control">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_vendedor">Vendedor:</label>
            <select name="id_vendedor" class="form-control">
                @foreach($vendedores as $vendedor)
                    <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
                @endforeach
            </select>
        </div>

        <hr>
        <h4>Jogos</h4>
            @foreach ($jogos as $jogo)
                <div>
                    <input type="checkbox" name="jogos[]" value="{{ $jogo->id }}">
                    <label>{{ $jogo->titulo }}</label>
                    <input type="number" name="quantidade_jogos[{{ $jogo->id }}]" min="1" placeholder="Quantidade" value="1">
                </div>
            @endforeach

        <hr>
        <h4>Filmes</h4>
            @foreach ($filmes as $filme)
                <div>
                    <input type="checkbox" name="filmes[]" value="{{ $filme->id }}">
                    <label>{{ $filme->titulo }}</label>
                    <input type="number" name="quantidade_filmes[{{ $filme->id }}]" min="1" placeholder="Quantidade" value="1">
                </div>
            @endforeach


        <hr>
        <h4>Livros</h4>
            @foreach ($livros as $livro)
                <div>
                    <input type="checkbox" name="livros[]" value="{{ $livro->id }}">
                    <label>{{ $livro->titulo }}</label>
                    <input type="number" name="quantidade_livros[{{ $livro->id }}]" min="1" placeholder="Quantidade" value="1">
                </div>
            @endforeach


        <button type="submit" class="btn btn-primary mt-4">Salvar Pedido</button>
    </form>
@endsection
