<body>
    <div class="container">
        <h1>Novo Pedido</h1>
        <form action="{{ route('pedidos.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="qnt_ingrediente">Quantidade de Ingredientes:</label>
                <input type="double" name="quantidade" required>
            </div>
            <div class="form-group">
                <label for="ingredientes_id">Ingredientes:</label>
                <input type="integer" name="ingredientes_id">
                </div>
            
            
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
