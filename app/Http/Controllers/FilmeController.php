<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {
        return view('produtos.create_filme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $filme = \App\Models\Filme::findOrFail($id);
        return view('produtos.edit_filme', compact('filme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'diretor' => 'required|string|max:255',
            'produtora' => 'required|string|max:255',
            'ano_lancamento' => 'required|integer',
            'genero' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $filme = \App\Models\Filme::findOrFail($id);
        $filme->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'Filme atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Filme::findOrFail($id)->delete();
        return redirect()->route('produtos.index')->with('success', 'Filme removido com sucesso!');
    }
}
