<body>
    <div class="container">
        <br>
        <a href="{{ route('receitas.create') }}" class="btn btn-primary">Nova Receita</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Tempo de Preparo</th>
                    <th>Modo de Preparo</th>
                    <th>Quantidade de Ingredientes</th>
                    <th>Valor</th>
                    <th>Ingredientes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($receitas as $receitas)
                    <tr>
                        <td class="colunas">{{ $receitas->id }}</td>
                        <td id="nome">{{ $receitas->nome }}</td>
                        <td class="colunas">{{ $receitas->tipo }}</td>
                        <td class="colunas">{{ $receitas->modo_preparo }}</td>
                        <td class="colunas">{{ $receitas->tempo_preparo }}</td>
                        <td class="colunas">{{ $receitas->qnt_ingrediente }}</td>
                        <td class="colunas">{{ $receitas->valor }}</td>
                        <td class="colunas">{{ $receitas->ingredientes_id }}</td>
                        <td>
                            <a href="{{ route('receitas.show', $receitas->id) }}"
                                class="btn btn-info">Detalhes</a>
                            <a href="{{ route('receitas.edit', $receitas->id) }}"
                                class="btn btn-warning">Editar</a>
                            <form action="{{ route('receitas.destroy', $receitas->id) }}" method="POST"
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
