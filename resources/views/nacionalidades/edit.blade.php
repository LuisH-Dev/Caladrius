@extends('adminlte::page')

@section('content')
    <h3>Editando Nacionalidade: {{ $nacionalidade->descricao }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('nacionalidades.update', $nacionalidade->id))->method('POST')->open() !!}
        @method('PUT')
        <div class="form-group">
            {!! Html::label('Nacionalidade') !!}
            {!! Html::text('descricao', '')->value($nacionalidade->descricao)->placeholder('Digite a Nacionalidade')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Editar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('nacionalidades.index') }}" class="btn btn-info">Voltar</a>
@stop
