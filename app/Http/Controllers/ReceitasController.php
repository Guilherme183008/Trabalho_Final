<?php

namespace App\Http\Controllers;

use App\Models\Ingredientes;
use Illuminate\Http\Request;
use App\Models\Receitas;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ReceitasController extends Controller {
    public function index() {

        $receitas = DB::table('receitas')
            ->join('ingredientes', 'receitas.ingredientes_id', '=', 'ingredientes.id')
            ->select('receitas.*', 'ingredientes.nome as nome_ingrediente')
            ->get();



        return view('receitas.index', compact('receitas'));

    }
    public function create() {

        return view('receitas.create');
    }
    public function store(Request $request) {

        $receitas = new Receitas([

            'nome' => $request->input('nome'),
            'tipo' => $request->input('tipo'),
            'tempo_preparo' => $request->input('tempo_preparo'),
            'modo_preparo' => $request->input('modo_preparo'),
            'qnt_ingrediente' => $request->input('qnt_ingrediente'),
            'valor' => $request->input('valor'),
            'ingredientes_id' => $request->input('ingredientes_id'),

        ]);

        $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
            'tempo_preparo' => 'required|numeric',
            'modo_preparo' => 'required|string',
            'qnt_ingrediente' => 'required|numeric',
            'valor' => 'numeric',
            'ingredientes_id' => 'numeric',
        ]);

        $receitas->save();

        return redirect()->route('receitas.create')->with('success', 'Receita cadastrada com sucesso!');
    }
    public function show($id) {

        $receitas = Receitas::findOrFail($id);

        return view('receitas.show', compact('receitas'));
    }
    public function edit($id) {

        $receitas = Receitas::findOrFail($id);

        return view('receitas.edit', compact('receitas'));
    }
    public function update(Request $request, $id) {

        $receitas = Receitas::findOrFail($id);

        $receitas->nome = $request->input('nome');
        $receitas->tipo = $request->input('tipo');
        $receitas->tempo_preparo = $request->input('tempo_preparo');
        $receitas->modo_preparo = $request->input('modo_preparo');
        $receitas->qnt_ingrediente = $request->input('qnt_ingrediente');
        $receitas->valor = $request->input('valor');
        $receitas->ingredientes_id = $request->input('ingredientes_id');

        $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
            'tempo_preparo' => 'required|numeric',
            'modo_preparo' => 'required|string',
            'qnt_ingrediente' => 'required|numeric',
            'valor' => 'numeric',
            'ingredientes_id' => 'numeric',
        ]);

        $receitas->save();

        return redirect()->route('receitas.index');
    }
    public function prepareDish($ingredientes_id, $qnt_ingrediente) {
        $receita = Receitas::findOrFail($ingredientes_id);

        $ingrediente = Ingredientes::findOrFail($receita->ingredientes_id);
    
        if ($ingrediente->qnt_un >= $qnt_ingrediente) {
            $ingrediente->qnt_un -= $qnt_ingrediente;
            $ingrediente->save();
            return redirect()->route('receitas.index')->with('success', 'Ingrediente atualizado com sucesso!');
        } else {
            return redirect()->route('receitas.index')->with('error', 'Quantidade insuficiente de ingrediente!');
        }

    }

    public function destroy($id) {

        $receitas = Receitas::findOrFail($id);

        $receitas->delete();

        return redirect()->route('receitas.index');
    }
}
