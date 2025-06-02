@extends('adminlte::page')

@section('content')
    <h3>Editando Ator: {{ $ator->nome }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('atores.update', $ator->id))->method('POST')->open() !!}
        @method('PUT')
        <div class="form-group">
            {!! Html::label('Nome') !!}
            {!! Html::text('nome', 'Nome')->value($ator->nome)->placeholder($ator->nome)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Nacionalidade') !!}
            {!! Html::select('nacionalidade_id', \App\Models\Nacionalidade::orderBy('descricao')->pluck('descricao', 'id')->toArray())->value($ator->nacionalidade)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Data de Nascimento') !!}
            {!! Html::text('data_nascimento', 'Data de Nascimento')->value($ator->data_nascimento)->placeholder($ator->data_nascimento)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Data de Início das Atividades') !!}
            {!! Html::text('inicio_atividades', 'Data de Início das Atividades')->value($ator->inicio_atividades)->placeholder($ator->inicio_atividades)->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Editar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('atores.index') }}" class="btn btn-info">Voltar</a>
@stop
