@extends('adminlte::page')

@section('content')
    <h3>Nova Nacionalidade</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('nacionalidades.store'))->method('POST')->open() !!}
        <div class="form-group">
            {!! Html::text('descricao', '')->placeholder('Digite Nacionalidade')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Salvar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

    <a href="{{ route('nacionalidades.index') }}" class="btn btn-info">Voltar</a>
@stop

