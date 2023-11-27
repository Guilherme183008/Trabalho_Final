{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Cadastro Compra')

@section('content')
    <h1>Nova Compra</h1>
    <form action="{{ route('compras.store') }}" method="POST">
        <!-- Token CSRF para proteção contra ataques CSRF -->
        @csrf
        <div class="form-group">
            <label for="qnt_ingrediente">Quantidade de Ingredientes:</label>
            <input type="double" name="quantidade" required>
        </div>
        <div class="form-group">
            <label for="ingredientes_id">Ingredientes:</label>
            <input type="integer" name="ingredientes_id">
        </div>


        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('compras.index') }}" class="btn btn-secondary">Cancelar</a>
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
