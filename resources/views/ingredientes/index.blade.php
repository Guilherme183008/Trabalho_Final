<body>
    <div class="container">
        <br>
        <a href="{{ route('ingredientes.create') }}" class="btn btn-primary">Novo Tipo Ingrediente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade Unidade</th>
                    <th>Valor</th>
                    <th>Quantidade Mínima</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredientes as $ingredientes)
                    <tr>
                        <td class="colunas">{{ $ingredientes->id }}</td>
                        <td id="nome">{{ $ingredientes->nome }}</td>
                        <td class="colunas">{{ $ingredientes->qnt_un }}</td>
                        <td class="colunas">{{ $ingredientes->vlor }}</td>
                        <td class="colunas">{{ $ingredientes->qnt_min }}</td>
                        <td class="colunas">{{ $ingredientes->tipo_ingrediente_id }}</td>
                        <td>
                            <a href="{{ route('ingredientes.show', $ingredientes->id) }}"
                                class="btn btn-info">Detalhes</a>
                            <a href="{{ route('ingredientes.edit', $ingredientes->id) }}"
                                class="btn btn-warning">Editar</a>
                            <form action="{{ route('ingredientes.destroy', $ingredientes->id) }}" method="POST"
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
