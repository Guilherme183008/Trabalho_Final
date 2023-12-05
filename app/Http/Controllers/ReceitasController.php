<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receitas;

class ReceitasController extends Controller
{
    public function index()
    {
        
        $receitas = Receitas::all();
       
        return view('receitas.index', compact('receitas'));
        
    }
    public function create()
    {
        
        return view('receitas.create');
    }
    public function store(Request $request)
    {
        
        $receitas = new Receitas([
            
            'nome' => $request->input('nome'),
            'tipo' => $request->input('tipo'),
            'tempo_preparo' => $request->input('tempo_preparo'),
            'modo_preparo' => $request->input('modo_preparo'),
            'qnt_ingrediente' => $request->input('qnt_ingrediente'),
            'valor' => $request->input('valor'),
            'ingredientes_id' => $request->input('ingredientes_id'),

        ]);
        
        $receitas->save();
        
        return redirect()->route('receitas.create');
    }
    public function show($id)
    {
        
        $receitas = Receitas::findOrFail($id);
        
        return view('receitas.show', compact('receitas'));
    }
    public function edit($id)
    {
        
        $receitas = Receitas::findOrFail($id);
        
        return view('receitas.edit', compact('receitas'));
    }
    public function update(Request $request, $id)
    {
        
        $receitas = Receitas::findOrFail($id);
       
        $receitas->nome = $request->input('nome');
        $receitas->tipo = $request->input('tipo');
        $receitas->tempo_preparo = $request->input('tempo_preparo');
        $receitas->modo_preparo = $request->input('modo_preparo');
        $receitas->qnt_ingrediente = $request->input('qnt_ingrediente');
        $receitas->valor = $request->input('valor');
        $receitas->ingredientes_id = $request->input('ingredientes_id');
    
        $receitas->save();
        
        return redirect()->route('receitas.index');
    }

    
    /*public function removerIngredientes($receitaId)
{
    // Obter a receitas específica pelo ID
    $receitas = Receitas::findOrFail($receitaId);

    // Iterar sobre os ingredientes da receitas e subtrair a quantidade de unidades
    foreach ($receitas->ingredientes as $ingrediente) {
        $ingrediente->qnt_un -= $receitas->qnt_ingrediente;
        $ingrediente->save();
    }

    return redirect()->back()->with('success', 'Quantidade de ingredientes subtraída com sucesso!');
}*/
    public function destroy($id)
    {
        
        $receitas = Receitas::findOrFail($id);
        
        $receitas->delete();
        
        return redirect()->route('receitas.index');
    }
}
