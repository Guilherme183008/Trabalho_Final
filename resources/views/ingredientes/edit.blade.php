<body>
    <div class="container">
        <h1>Editar Tipo Ingrediente</h1>
        <form action="{{ route('ingredientes.update', $ingredientes->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{ $ingredientes->nome }}">
            </div>
            <div class="form-group">
                <label for="qnt_un">Quantidade:</label>
                <input type="integer" name="qnt_un" value="{{ $ingredientes->qnt_un }}">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="double" name="valor" value="{{ $ingredientes->valor }}">
            </div>
            <div class="form-group">
                <label for="qnt_un">Quantidade Mínima:</label>
                <input type="double" name="qnt_min" value="{{ $ingredientes->qnt_min }}">
            </div>
            <div class="form-group">
                <label for="tipo_ingrediente_id">Tipo Ingrediente:</label>
                <input type="integer" name="tipo_ingrediente_id" value="{{ $ingredientes->tipo_ingrediente_id }}">
            </div>
            
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>