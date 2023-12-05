<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\ingredientes;

class ComprasController extends Controller
{
    public function index()
    {

        $compras = Compras::all();

        return view('compras.index', compact('compras'));

    }
    public function create()
    {

        return view('compras.create');
    }
    public function store(Request $request)
    {

        $compras = new Compras([

            'quantidade' => $request->input('quantidade'),
            'ingredientes_id' => $request->input('ingredientes_id'),

        ]);

        $compras->save();

        $ingrediente = Ingredientes::find($request->input('ingredientes_id'));
        if ($ingrediente) {
            $ingrediente->increment('qnt_un', $request->input('quantidade'));
        }

        return redirect()->route('compras.create');
    }
    public function show($id)
    {

        $compras = Compras::findOrFail($id);

        return view('compras.show', compact('compras'));
    }
    public function edit($id)
    {

        $compras = Compras::findOrFail($id);

        return view('compras.edit', compact('compras'));
    }
    public function update(Request $request, $id)
    {

        $compras = Compras::findOrFail($id);

        $compras->quantidade = $request->input('quantidade');
        $compras->ingredientes_id = $request->input('ingredientes_id');

        $compras->save();

        return redirect()->route('compras.index');
    }
    public function destroy($id)
    {

        $compras = Compras::findOrFail($id);

        $compras->delete();

        return redirect()->route('compras.index');
    }
}
