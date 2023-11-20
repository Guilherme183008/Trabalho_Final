<body>
    <div class="container">
        <br>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Nova Pedido</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Quantidade</th>
                    <th>Ingredientes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedidos)
                    <tr>
                        <td class="colunas">{{ $pedidos->id }}</td>
                        <td class="colunas">{{ $pedidos->quantidade }}</td>
                        <td class="colunas">{{ $pedidos->ingredientes_id }}</td>
                        <td>
                            <a href="{{ route('pedidos.show', $pedidos->id) }}"
                                class="btn btn-info">Detalhes</a>
                            <a href="{{ route('pedidos.edit', $pedidos->id) }}"
                                class="btn btn-warning">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedidos->id) }}" method="POST"
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
    </div>
</body>
