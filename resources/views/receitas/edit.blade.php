{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Editar Receitas')

@section('content')
    <h1>Editar Receita</h1>
    <form action="{{ route('receitas.update', $receitas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ $receitas->nome }}">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" value="{{ $receitas->tipo }}">
        </div>
        <div class="form-group">
            <label for="tipo">Tempo de Preparo:</label>
            <input type="double" name="tempo_preparo" value="{{ $receitas->tempo_preparo }}">
        </div>
        <div class="form-group">
            <label for="tipo">Modo de Preparo:</label>
            <input type="text" name="modo_preparo" value="{{ $receitas->modo_preparo }}">
        </div>
        <div class="form-group">
            <label for="tipo">Quantidade de Ingradientes:</label>
            <input type="double" name="qnt_ingrediente" value="{{ $receitas->qnt_ingrediente }}">
        </div>
        <div class="form-group">
            <label for="tipo">Valor:</label>
            <input type="double" name="valor" value="{{ $receitas->valor }}">
        </div>
        <div class="form-group">
            <label for="tipo">Ingredientes:</label>
            <input type="integer" name="ingredientes_id" value="{{ $receitas->ingredientes_id }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
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
