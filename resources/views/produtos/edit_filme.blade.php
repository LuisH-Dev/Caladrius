@extends('adminlte::page')

@section('content')
    <h3>Editando Filme: {{ $filme->titulo }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('filmes.update', $filme->id))->method('POST')->open() !!}
        @method('PUT')
        <div class="form-group">
            {!! Html::label('Título') !!}
            {!! Html::text('titulo', 'Título')->value($filme->titulo)->placeholder($filme->titulo)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Diretor') !!}
            {!! Html::text('diretor', 'Diretor')->value($filme->diretor)->placeholder($filme->diretor)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Produtora') !!}
            {!! Html::text('produtora', 'Produtora')->value($filme->produtora)->placeholder($filme->produtora)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Ano de Lançamento') !!}
            {!! Html::number('ano_lancamento', 'Ano de Lançamento')->value($filme->ano_lancamento)->placeholder($filme->ano_lancamento)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Gênero') !!}
            {!! Html::text('genero', 'Gênero')->value($filme->genero)->placeholder($filme->genero)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Preço') !!}
            {!! Html::number('preco', 'Preço')->value($filme->preco)->placeholder($filme->preco)->attribute('step', '0.01')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Editar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('produtos.index') }}" class="btn btn-info">Voltar</a>
@stop