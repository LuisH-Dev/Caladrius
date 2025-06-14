<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
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
        return view('produtos.create_livro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        $livro = \App\Models\Livro::findOrFail($id);
        return view('produtos.edit_livro', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editora' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer',
            'genero' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        $livro = \App\Models\Livro::findOrFail($id);
        $livro->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Livro::findOrFail($id)->delete();
        return redirect()->route('produtos.index')->with('success', 'Livro removido com sucesso!');
    }
}
