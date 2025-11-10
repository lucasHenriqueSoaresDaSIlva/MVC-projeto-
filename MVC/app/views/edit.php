<?php
// Remove o HTML completo
?>
        <h1>Editar Produto</h1>
        
        <form action="index.php?action=update" method="POST" class="product-form">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
            </div>
            
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="number" id="price" name="price" step="0.01" min="0" 
                       value="<?= $product['price'] ?>" required>
            </div>
            
            <div class="form-group">
                <label for="category">Categoria:</label>
                <input type="text" id="category" name="category" 
                       value="<?= htmlspecialchars($product['category']) ?>" required>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="index.php" class="btn btn-cancel">Cancelar</a>
            </div>
        </form>