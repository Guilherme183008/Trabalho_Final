{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Cadastro Tipos')

@section('content')
    <h1>Novo Tipo Ingrediente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tipo_ingrediente.store') }}" method="POST">
        <!-- Token CSRF para proteção contra ataques CSRF -->
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('tipo_ingrediente.index') }}" class="btn btn-secondary">Cancelar</a>
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
