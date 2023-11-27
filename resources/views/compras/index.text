<body>
    <div class="container">
        <br>
        <a href="{{ route('compras.create') }}" class="btn btn-primary">Nova Compra</a>
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
                @foreach ($compras as $compras)
                    <tr>
                        <td class="colunas">{{ $compras->id }}</td>
                        <td class="colunas">{{ $compras->quantidade }}</td>
                        <td class="colunas">{{ $compras->ingredientes_id }}</td>
                        <td>
                            <a href="{{ route('compras.show', $compras->id) }}"
                                class="btn btn-info">Detalhes</a>
                            <a href="{{ route('compras.edit', $compras->id) }}"
                                class="btn btn-warning">Editar</a>
                            <form action="{{ route('compras.destroy', $compras->id) }}" method="POST"
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
