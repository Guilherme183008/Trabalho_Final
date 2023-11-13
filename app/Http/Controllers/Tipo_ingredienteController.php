<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_ingrediente;


class Tipo_ingredienteController extends Controller
{
    public function index()
    {
        
        $tipo_ingrediente = Tipo_ingrediente::all();
       
        return view('tipo_ingrediente.index', compact('tipo_ingrediente'));
        
    }
    public function create()
    {
        
        return view('tipo_ingrediente.create');
    }
    public function store(Request $request)
    {
        
        $tipo_ingrediente = new Tipo_ingrediente([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);
        
        $tipo_ingrediente->save();
        
        return redirect()->route('tipo_ingrediente.create');
    }
    public function show($id)
    {
        
        $tipo_ingrediente = Tipo_ingrediente::findOrFail($id);
        
        return view('tipo_ingrediente.show', compact('tipo_ingrediente'));
    }
    public function edit($id)
    {
        
        $tipo_ingrediente = Tipo_ingrediente::findOrFail($id);
        
        return view('tipo_ingrediente.edit', compact('tipo_ingrediente'));
    }
    public function update(Request $request, $id)
    {
        
        $tipo_ingrediente = Tipo_ingrediente::findOrFail($id);
       
        $tipo_ingrediente->nome = $request->input('nome');
        $tipo_ingrediente->descricao = $request->input('descricao');
    
        
        $tipo_ingrediente->save();
        
        return redirect()->route('tipo_ingrediente.index');
    }
    public function destroy($id)
    {
        
        $tipo_ingrediente = Tipo_ingrediente::findOrFail($id);
        
        $tipo_ingrediente->delete();
        
        return redirect()->route('tipo_ingrediente.index');
    }
}
