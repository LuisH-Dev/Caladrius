<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nacionalidade;
use App\Http\Requests\NacionalidadesRequest;

class NacionalidadesController extends Controller
{
    public function index()
    {
        $nacionalidades = Nacionalidade::orderBy('descricao')->paginate(5);
        return view('nacionalidades.index', ['nacionalidades' => $nacionalidades]);
    }

    public function create()
    {
        return view('nacionalidades.create');
    }

    public function store(NacionalidadesRequest $request)
    {
        Nacionalidade::create($request->all());
        return redirect()->route('nacionalidades.index');
    }

    public function destroy($id)
    {
        Nacionalidade::find($id)->delete();
        return redirect()->route('nacionalidades.index');
    }

    public function edit($id)
    {
        $nacionalidade = Nacionalidade::find($id);
        return view('nacionalidades.edit', ['nacionalidade' => $nacionalidade]);
    }

    public function update(Request $request, $id)
    {
        Nacionalidade::find($id)->update($request->all());
        return redirect()->route('nacionalidades.index');
    }
}
