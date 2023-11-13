<body>
    <div class="container">
        <h1>Editar Tipo Ingrediente</h1>
        <form action="{{ route('tipo_ingrediente.update', $tipo_ingrediente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{ $tipo_ingrediente->nome }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" value="{{ $tipo_ingrediente->descricao }}">
            </div>
            
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('tipo_ingrediente.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>