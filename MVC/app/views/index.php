<?php
// Remove o HTML completo, pois agora temos header e footer
?>
        <h1>Gerenciador de Produtos</h1>
        
        <!-- Mensagens -->
        <?php if (isset($_GET['success'])): ?>
            <div class="alert success"><?= htmlspecialchars($_GET['success']) ?></div>
        <?php endif; ?>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="alert error"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>
        
        <!-- Botão Adicionar -->
        <div class="actions">
            <a href="index.php?action=create" class="btn btn-primary">Adicionar Produto</a>
        </div>
        
        <!-- Tabela de Produtos -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                    <tr>
                        <td colspan="5" class="text-center">Nenhum produto cadastrado</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td>R$ <?= number_format($product['price'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($product['category']) ?></td>
                        <td class="actions">
                            <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn btn-edit">Editar</a>
                            <a href="index.php?action=delete&id=<?= $product['id'] ?>" 
                               class="btn btn-delete" 
                               onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>