{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <h1>Pedidos</h1>
@stop

@section('content')
    <p>Listagem de Pedidos para compras:</p>
    <a href="{{ route('pedidos.create') }}" class="btn btn-success">Nova Pedido</a>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Quantidade</th>
            <th>Itens</th>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedidos)
                <tr>
                    <td>{{ $pedidos->id }}</td>
                    <td>{{ $pedidos->quantidade }}</td>
                    <td>{{ $pedidos->nome_ingrediente }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', $pedidos->id) }}"
                            class="btn btn-warning">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedidos->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
            @endforeach
            </tr>
        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script>
                console.log('Hi!');
            </script>
        </tbody>
    </table>
@stop
