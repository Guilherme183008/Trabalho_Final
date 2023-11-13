<body>
    <div class="container">
        <h1>Novo Tipo Ingrediente</h1>
        <form action="{{ route('tipo_ingrediente.store') }}" method="POST">
             <!-- Token CSRF para proteção contra ataques CSRF -->
             @csrf
             <div class="form-group">
                 <label for="nome">Nome:</label>
                 <input type="text" name="nome">
                 </div>
             <div class="form-group">
                 <label for="descricao">Descrição:</label>
                 <input type="text" name="descricao">
                 </div>
            
             <button type="submit" class="btn btn-success">Salvar</button>
             <a href="{{ route('tipo_ingrediente.index') }}" class="btn btn-secondary">Cancelar</a>
             </form>
         </div>
     </body>
