{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Tipos Ingredientes')

@section('content_header')
    <h1>Tipos de Ingredientes</h1>
@stop

@section('content')
    <p>Listagem de Tipos de Ingredientes</p>
    <a href="{{ route('tipo_ingrediente.create') }}" class="btn btn-success">Novo Tipo Ingrediente</a>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </thead>
        <tbody>
            @foreach ($tipo_ingrediente as $tipo_ingrediente)
                <tr>
                    <td>{{ $tipo_ingrediente->id }}</td>
                    <td>{{ $tipo_ingrediente->nome }}</td>
                    <td>{{ $tipo_ingrediente->descricao }}</td>
                    <td>
                        <a href="{{ route('tipo_ingrediente.edit', $tipo_ingrediente->id) }}"
                            class="btn btn-warning">Editar</a>
                        <form action="{{ route('tipo_ingrediente.destroy', $tipo_ingrediente->id) }}" method="POST"
                            style="display: inline;">
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
