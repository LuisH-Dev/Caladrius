@extends('adminlte::page')

@section('content')
    <h3>Novo Livro</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="editora">Editora</label>
            <input type="text" name="editora" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" class="form-control" required>
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