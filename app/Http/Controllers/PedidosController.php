<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    public function index()
    {
        
        $pedidos = Pedidos::all();
       
        return view('pedidos.index', compact('pedidos'));
        
    }
    public function create()
    {
        
        return view('pedidos.create');
    }
    public function store(Request $request)
    {
        
        $pedidos = new Pedidos([
            
            'quantidade' => $request->input('quantidade'),
            'ingredientes_id' => $request->input('ingredientes_id'),

        ]);
        
        $pedidos->save();
        
        return redirect()->route('pedidos.create');
    }
    public function show($id)
    {
        
        $pedidos = Pedidos::findOrFail($id);
        
        return view('pedidos.show', compact('pedidos'));
    }
    public function edit($id)
    {
        
        $pedidos = Pedidos::findOrFail($id);
        
        return view('pedidos.edit', compact('pedidos'));
    }
    public function update(Request $request, $id)
    {
        
        $pedidos = Pedidos::findOrFail($id);
       
        $pedidos->quantidade = $request->input('quantidade');
        $pedidos->ingredientes_id = $request->input('ingredientes_id');
    
        $pedidos->save();
        
        return redirect()->route('pedidos.index');
    }
    public function destroy($id)
    {
        
        $pedidos = Pedidos::findOrFail($id);
        
        $pedidos->delete();
        
        return redirect()->route('pedidos.index');
    }
}
