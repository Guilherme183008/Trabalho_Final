{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Cadastro Receitas')

@section('content')
    <h1>Nova Receita</h1>
    <form action="{{ route('receitas.store') }}" method="POST">
        <!-- Token CSRF para proteção contra ataques CSRF -->
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="String" name="tipo">
        </div>
        <div class="form-group">
            <label for="tempo_preparo">Tempo de Preparo:</label>
            <input type="double" name="tempo_preparo">
        </div>
        <div class="form-group">
            <label for="modo_preparo">Modo de Preparo:</label>
            <input type="Text" name="modo_preparo">
        </div>
        <div class="form-group">
            <label for="qnt_ingrediente">Quantidade de Ingredientes:</label>
            <input type="double" name="qnt_ingrediente" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="double" name="valor">
        </div>
        <div class="form-group">
            <label for="ingredientes_id">Ingredientes:</label>
            <input type="integer" name="ingredientes_id">
        </div>


        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('receitas.index') }}" class="btn btn-secondary">Cancelar</a>
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
