{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Tipos Ingredientes')

@section('content_header')
    <h1>Tipos de Ingredientes</h1>
@stop

@section('content')
    <p>Listagem de Tipos de Ingredientes</p>
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
