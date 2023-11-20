<body>
    <div class="container">
        <h1>Editar Compra</h1>
        <form action="{{ route('compras.update', $compras->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tipo">Quantidade de Ingradientes:</label>
                <input type="double" name="quantidade" value="{{ $compras->quantidade }}">
            </div>
            <div class="form-group">
                <label for="tipo">Ingredientes:</label>
                <input type="integer" name="ingredientes_id" value="{{ $compras->ingredientes_id}}">
            </div>
            
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('compras.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>