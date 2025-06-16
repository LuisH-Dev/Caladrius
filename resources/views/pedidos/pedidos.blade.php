@extends('adminlte::page')

@section('content')
    <h3>Pedidos criados</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID do pedido</th>
                <th>ID usuário</th>
                <th>ID vendedor</th>
                <th>ID jogo</th>
                <th>ID livro</th>
                <th>ID filme</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->id_usuario }}</td>
                <td>{{ $pedido->id_vendedor }}</td>
                <td>{{ $pedido->id_jogo }}</td>
                <td>{{ $pedido->id_livro }}</td>
                <td>{{ $pedido->id_filme }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection