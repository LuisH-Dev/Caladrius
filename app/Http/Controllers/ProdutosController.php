<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Filme;
use App\Models\Livro;

class ProdutosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        $filmes = Filme::all();
        $livros = Livro::all();

        return view('produtos.index', [
            'jogos' => $jogos,
            'filmes' => $filmes,
            'livros' => $livros,
        ]);
    }

    public function createJogo()
    {
        return view('produtos.create_jogo');
    }

    public function storeJogo(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'desenvolvedor' => 'required|string|max:255',
            'publicadora' => 'required|string|max:255',
            'ano_lancamento' => 'required|integer',
            'genero' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Jogo::create($request->all());

        return redirect('/produtos')->with('success', 'Jogo adicionado com sucesso!');
    }

    public function createFilme()
    {
        return view('produtos.create_filme');
    }

    public function storeFilme(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'diretor' => 'required|string|max:255',
            'produtora' => 'required|string|max:255',
            'ano_lancamento' => 'required|integer',
            'genero' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        \App\Models\Filme::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Filme adicionado com sucesso!');
    }

    public function createLivro()
    {
        return view('produtos.create_livro');
    }

    public function storeLivro(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editora' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer',
            'genero' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Livro::create($request->all());
        return redirect('/produtos')->with('success', 'Livro adicionado com sucesso!');
    }
}