{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Ingredientes')

@section('content_header')
    <h1>Ingredientes</h1>
@stop

@section('content')
    <p>Listagem de Ingredientes e suas quantidades:</p>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Mínimo</th>
            <th>Tipo</th>
        </thead>
        <tbody>
            @foreach ($ingredientes as $ingredientes)
                <tr>
                    <td>{{ $ingredientes->id }}</td>
                    <td>{{ $ingredientes->nome }}</td>
                    <td>{{ $ingredientes->qnt_un }}</td>
                    <td>{{ $ingredientes->valor }}</td>
                    <td>{{ $ingredientes->qnt_min }}</td>
                    <td>{{ $ingredientes->tipo_ingrediente_id }}</td>
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
