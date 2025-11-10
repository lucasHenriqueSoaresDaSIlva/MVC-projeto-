<?php
// Remove o HTML completo
?>
        <h1>Adicionar Novo Produto</h1>
        
        <form action="index.php?action=store" method="POST" class="product-form">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required>
            </div>
            
            <div class="form-group">
                <label for="category">Categoria:</label>
                <input type="text" id="category" name="category" required>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-cancel">Cancelar</a>
            </div>
        </form>