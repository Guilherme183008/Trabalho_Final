{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Editar Ingrediente')

@section('content')
    <h1>Editar Tipo Ingrediente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ingredientes.update', $ingredientes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ $ingredientes->nome }}">
        </div>
        <div class="form-group">
            <label for="qnt_un">Quantidade:</label>
            <input type="integer" name="qnt_un" value="{{ $ingredientes->qnt_un }}">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="double" name="valor" value="{{ $ingredientes->valor }}">
        </div>
        <div class="form-group">
            <label for="qnt_un">Quantidade Mínima:</label>
            <input type="double" name="qnt_min" value="{{ $ingredientes->qnt_min }}">
        </div>
        <div class="form-group">
            <label for="tipo_ingrediente_id">Tipo Ingrediente:</label>
            <input type="integer" name="tipo_ingrediente_id" value="{{ $ingredientes->tipo_ingrediente_id }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
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
