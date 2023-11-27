{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')
    <h1>Compras</h1>
@stop

@section('content')
    <p>Listagem de Compras realizadas:</p>
    <a href="{{ route('compras.create') }}" class="btn btn-success">Nova Compra</a>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Quantidade</th>
            <th>Itens</th>
        </thead>
        <tbody>
            @foreach ($compras as $compras)
                <tr>
                    <td>{{ $compras->id }}</td>
                    <td>{{ $compras->quantidade }}</td>
                    <td>{{ $compras->ingredientes_id }}</td>
                    <td>
                        <a href="{{ route('compras.edit', $compras->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('compras.destroy', $compras->id) }}" method="POST" style="display: inline;">
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
