{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Editar Compras')

@section('content')
    <h1>Editar Pedido</h1>
    <form action="{{ route('pedidos.update', $pedidos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipo">Quantidade de Ingradientes:</label>
            <input type="double" name="quantidade" value="{{ $pedidos->quantidade }}">
        </div>
        <div class="form-group">
            <label for="tipo">Ingredientes:</label>
            <input type="integer" name="ingredientes_id" value="{{ $pedidos->ingredientes_id }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
