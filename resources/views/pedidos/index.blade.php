@extends('adminlte::page')

@section('content')
    <h3>Pedidos criados</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID do pedido</th>
                <th>ID usuário</th>
                <th>ID vendedor</th>
                <th>Itens</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->usuario->nome ?? 'desconhecido' }}</td>
                <td>{{ $pedido->vendedor->nome ?? 'desconhecido' }}</td>
                <td>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Jogo</th>
                                <th>Filme</th>
                                <th>Livro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $pedido->jogo->titulo }}</td>
                            <td>{{ $pedido->filme->titulo }}</td>
                            <td>{{ $pedido->livro->titulo }}</td>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection