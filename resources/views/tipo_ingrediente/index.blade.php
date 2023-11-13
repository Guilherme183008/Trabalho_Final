<body>
    <div class="container">
        <br>
        <a href="{{ route('tipo_ingrediente.create') }}" class="btn btn-primary">Novo Tipo Ingrediente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipo_ingrediente as $tipo_ingrediente)
                    <tr>
                        <td class="colunas">{{ $tipo_ingrediente->id }}</td>
                        <td id="nome">{{ $tipo_ingrediente->nome }}</td>
                        <td class="colunas">{{ $tipo_ingrediente->descricao }}</td>
                        <td>
                            <a href="{{ route('tipo_ingrediente.show', $tipo_ingrediente->id) }}"
                                class="btn btn-info">Detalhes</a>
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
    </div>
</body>
