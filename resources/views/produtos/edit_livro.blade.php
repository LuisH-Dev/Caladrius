@extends('adminlte::page')

@section('content')
    <h3>Editando Livro: {{ $livro->titulo }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('livros.update', $livro->id))->method('POST')->open() !!}
        @method('PUT')
        <div class="form-group">
            {!! Html::label('Título') !!}
            {!! Html::text('titulo', 'Título')->value($livro->titulo)->placeholder($livro->titulo)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Autor') !!}
            {!! Html::text('autor', 'Autor')->value($livro->autor)->placeholder($livro->autor)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Editora') !!}
            {!! Html::text('editora', 'Editora')->value($livro->editora)->placeholder($livro->editora)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Ano de Publicação') !!}
            {!! Html::number('ano_publicacao', 'Ano de Publicação')->value($livro->ano_publicacao)->placeholder($livro->ano_publicacao)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Gênero') !!}
            {!! Html::text('genero', 'Gênero')->value($livro->genero)->placeholder($livro->genero)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Preço') !!}
            {!! Html::number('preco', 'Preço')->value($livro->preco)->placeholder($livro->preco)->attribute('step', '0.01')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Editar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('produtos.index') }}" class="btn btn-info">Voltar</a>
@stop