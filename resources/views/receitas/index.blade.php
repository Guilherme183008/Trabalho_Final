{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Receitas')

@section('content_header')
    <h1>Receitas</h1>
@stop

@section('content')
    <p>Receitas no cardápio:</p>
    <a href="{{ route('receitas.create') }}" class="btn btn-success">Nova Receita</a>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Modo Preparo</th>
                <th>Quantia Ingredientes</th>
                <th>Valor</th>
                <th>Ingredientes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receitas as $receitas)
                <tr>
                    <td>{{ $receitas->id }}</td>
                    <td>{{ $receitas->nome }}</td>
                    <td>{{ $receitas->tipo }}</td>
                    <td>{{ $receitas->modo_preparo }}</td>
                    <td>{{ $receitas->qnt_ingrediente }}</td>
                    <td>{{ $receitas->valor }}</td>
                    <td>{{ $receitas->nome_ingrediente }}</td>
                    <td>
                        <form action="{{ route('receitas.prepareDish', ['ingredientes_id' => $receitas->ingredientes_id, 'qnt_ingrediente' => $receitas->qnt_ingrediente]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-info">Fazer Pedido</button>
                        </form>
                        <a href="{{ route('receitas.edit', $receitas->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('receitas.destroy', $receitas->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
