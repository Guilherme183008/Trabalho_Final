{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Cadastro Ingrediente')

@section('content')
    <h1>Novos Ingredientes</h1>
    <form action="{{ route('ingredientes.store') }}" method="POST">
        <!-- Token CSRF para proteção contra ataques CSRF -->
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </div>
        <div class="form-group">
            <label for="qnt_un">Quantidade:</label>
            <input type="integer" name="qnt_un" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="double" name="valor">
        </div>
        <div class="form-group">
            <label for="qnt_min">Quantidade Mínima:</label>
            <input type="double" name="qnt_min">
        </div>
        <div class="form-group">
            <label for="tipo_ingrediente_id">Tipo Ingrediente:</label>
            <input type="integer" name="tipo_ingrediente_id">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
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
