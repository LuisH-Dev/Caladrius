@extends('layouts.default')

@section('content')
<h1>Nacionalidades</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($nacionalidades as $nacionalidade)
        <tr>
            <td>{{ $nacionalidade->descricao }}</td>
            <td>
                <a href="{{ route('nacionalidades.edit', [$nacionalidade->id]) }}" class="btn-sm btn-success">Editar</a>
                <a href="#" onclick="return ConfirmaExclusao({{$nacionalidade->id}})"  class="btn-sm btn-danger">Remover</a>
                {{-- <a href="{{ route('nacionalidades.destroy', [$nacionalidade->id]) }}" class="btn-sm btn-danger">Remover</a> --}}
            </td>
        </tr>
    </tbody>
        @endforeach
</table>

<a href="{{ route('nacionalidades.create') }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete', 'nacionalidades')
