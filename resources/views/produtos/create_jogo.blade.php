@extends('adminlte::page')

@section('content')
    <h3>Novo Jogo</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jogos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desenvolvedor">Desenvolvedor</label>
            <input type="text" name="desenvolvedor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publicadora">Publicadora</label>
            <input type="text" name="publicadora" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ano_lancamento">Ano de Lançamento</label>
            <input type="number" name="ano_lancamento" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genero">Gênero</label>
            <input type="text" name="genero" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ url('/produtos') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection