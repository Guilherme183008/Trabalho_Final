<body>
    <div class="container">
        <h1>Editar Pedido</h1>
        <form action="{{ route('pedidos.update', $pedidos->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tipo">Quantidade de Ingradientes:</label>
                <input type="double" name="quantidade" value="{{ $pedidos->quantidade }}">
            </div>
            <div class="form-group">
                <label for="tipo">Ingredientes:</label>
                <input type="integer" name="ingredientes_id" value="{{ $pedidos->ingredientes_id}}">
            </div>
            
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>