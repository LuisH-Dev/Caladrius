@extends('adminlte::page')

@section('content')
    <h3>Editando Jogo: {{ $jogo->nome }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('jogos.update', $jogo->id))->method('POST')->open() !!}
        @method('PUT')
        <div class="form-group">
            {!! Html::label('Nome') !!}
            {!! Html::text('nome', 'Nome')->value($jogo->nome)->placeholder($jogo->nome)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Desenvolvedor') !!}
            {!! Html::text('desenvolvedor', 'Desenvolvedor')->value($jogo->desenvolvedor)->placeholder($jogo->desenvolvedor)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Publicadora') !!}
            {!! Html::text('publicadora', 'Publicadora')->value($jogo->publicadora)->placeholder($jogo->publicadora)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Ano de Lançamento') !!}
            {!! Html::number('ano_lancamento', 'Ano de Lançamento')->value($jogo->ano_lancamento)->placeholder($jogo->ano_lancamento)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Gênero') !!}
            {!! Html::text('genero', 'Gênero')->value($jogo->genero)->placeholder($jogo->genero)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Preço') !!}
            {!! Html::number('preco', 'Preço')->value($jogo->preco)->placeholder($jogo->preco)->attribute('step', '0.01')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Editar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ url('/produtos') }}" class="btn btn-info">Voltar</a>
@stop