<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidosController extends Controller
{
        /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        $pedidos = Pedido::with(['usuario', 'vendedor', 'jogos', 'filmes', 'livros'])->get();

        return view('pedidos.index', compact('pedidos'));
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Pedido::create($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Filme adicionado com sucesso!');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedidos.index')->with('success', 'Filme removido com sucesso!');
    }
}
