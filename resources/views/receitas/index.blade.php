{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Receitas')

@section('content_header')
    <h1>Receitas</h1>
@stop

@section('content')
    <p>Receitas no cardápio:</p>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Modo Preparo</th>
            <th>Quantia Ingredientes</th>
            <th>Valor</th>
            <th>Ingredientes</th>
        </thead>
        <tbody>
            @foreach ($receitas as $receitas)
                <tr>
                    <td>{{ $receitas->id }}</td>
                    <td>{{ $receitas->nome }}</td>
                    <td>{{ $receitas->tipo }}</td>
                    <td>{{ $receitas->modo_preparo }}</td>
                    <td>{{ $receitas->qnt_ingrediente }}</td>
                    <td>{{ $receitas->valor }}</td>
                    <td>{{ $receitas->ingredientes_id }}</td>
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
