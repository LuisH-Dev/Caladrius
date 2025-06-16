@extends('adminlte::page')

@section('content')
    <h3>Pedidos criados</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID do pedido</th>
                <th>Usuário</th>
                <th>Vendedor</th>
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
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Jogo</th>
                                    <th>Filme</th>
                                    <th>Livro</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $max = max(
                                        $pedido->jogos->count(),
                                        $pedido->filmes->count(),
                                        $pedido->livros->count()
                                    );
                                @endphp

                                @for($i = 0; $i < $max; $i++)
                                    <tr>
                                        <td>
                                            {{ $pedido->jogos[$i]->titulo ?? '-' }} 
                                            @if(isset($pedido->jogos[$i]))
                                                (Qtd: {{ $pedido->jogos[$i]->pivot->quantidade }})
                                            @endif
                                        </td>
                                        <td>
                                            {{ $pedido->filmes[$i]->titulo ?? '-' }}
                                            @if(isset($pedido->filmes[$i]))
                                                (Qtd: {{ $pedido->filmes[$i]->pivot->quantidade }})
                                            @endif
                                        </td>
                                        <td>
                                            {{ $pedido->livros[$i]->titulo ?? '-' }}
                                            @if(isset($pedido->livros[$i]))
                                                (Qtd: {{ $pedido->livros[$i]->pivot->quantidade }})
                                            @endif
                                        </td>
                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
