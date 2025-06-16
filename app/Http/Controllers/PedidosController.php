<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Usuario;
use App\Models\Vendedor;
use App\Models\Jogo;
use App\Models\Filme;
use App\Models\Livro;

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

    public function create()
    {
        $usuarios = Usuario::all();
        $vendedores = Vendedor::all();
        $jogos = Jogo::all();
        $filmes = Filme::all();
        $livros = Livro::all();

        return view('pedidos.create_pedido', compact('usuarios', 'vendedores', 'jogos', 'filmes', 'livros'));
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create([
            'id_usuario' => $request->id_usuario,
            'id_vendedor' => $request->id_vendedor,
        ]);

        if ($request->jogos) {
            $jogos = [];
            foreach ($request->jogos as $id_jogo => $quantidade) {
                $jogos[$id_jogo] = ['quantidade' => $quantidade];
            }
            $pedido->jogos()->sync($jogos);
        }

        if ($request->filmes) {
            $filmes = [];
            foreach ($request->filmes as $id_filme => $quantidade) {
                $filmes[$id_filme] = ['quantidade' => $quantidade];
            }
            $pedido->filmes()->sync($filmes);
        }

        if ($request->livros) {
            $livros = [];
            foreach ($request->livros as $id_livro => $quantidade) {
                $livros[$id_livro] = ['quantidade' => $quantidade];
            }
            $pedido->livros()->sync($livros);
        }

        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedidos.index')->with('success', 'Filme removido com sucesso!');
    }
}
