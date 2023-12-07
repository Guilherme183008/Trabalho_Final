<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredientes;
use Illuminate\Support\Facades\DB;

class IngredientesController extends Controller {
    public function index() {

        $ingredientes = DB::table('ingredientes')
            ->join('tipo_ingrediente', 'ingredientes.tipo_ingrediente_id', '=', 'tipo_ingrediente.id')
            ->select('ingredientes.*', 'tipo_ingrediente.nome as nome_tipo')
            ->get();

        return view('ingredientes.index', compact('ingredientes'));

    }
    public function create() {

        return view('ingredientes.create');
    }
    public function store(Request $request) {

        $ingredientes = new Ingredientes([
            'nome' => $request->input('nome'),
            'qnt_un' => $request->input('qnt_un'),
            'valor' => $request->input('valor'),
            'qnt_min' => $request->input('qnt_min'),
            'tipo_ingrediente_id' => $request->input('tipo_ingrediente_id'),
        ]);

        $request->validate([
            'nome' => 'required|string',
            'qnt_un' => 'required|numeric',
            'valor' => 'numeric',
            'qnt_min' => 'numeric',
            'tipo_ingrediente_id' => 'numeric',
        ]);


        $ingredientes->save();

        return redirect()->route('ingredientes.create');
    }
    public function show($id) {

        $ingredientes = Ingredientes::findOrFail($id);

        return view('ingredientes.show', compact('ingredientes'));
    }
    public function edit($id) {

        $ingredientes = Ingredientes::findOrFail($id);

        return view('ingredientes.edit', compact('ingredientes'));
    }
    public function update(Request $request, $id) {

        $ingredientes = Ingredientes::findOrFail($id);

        $ingredientes->nome = $request->input('nome');
        $ingredientes->qnt_un = $request->input('qnt_un');
        $ingredientes->valor = $request->input('valor');
        $ingredientes->qnt_min = $request->input('qnt_min');
        $ingredientes->tipo_ingrediente_id = $request->input('tipo_ingrediente_id');


        $ingredientes->save();

        return redirect()->route('ingredientes.index');
    }
    public function destroy($id) {

        $ingredientes = Ingredientes::findOrFail($id);

        $ingredientes->delete();

        return redirect()->route('ingredientes.index');
    }
}
