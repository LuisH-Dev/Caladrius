@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('atores.store'))->method('POST')->open() !!}
        <div class="form-group">
            {!! Html::text('nome', '')->placeholder('Digite o nome do ator')->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Nacionalidade') !!}
            {!! Html::select('nacionalidade_id', \App\Models\Nacionalidade::orderBy('descricao')->pluck('descricao', 'id')->toArray())->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::date('data_nascimento', '')->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::date('inicio_atividades', '')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Salvar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('atores.index') }}" class="btn btn-info">Voltar</a>
@stop

