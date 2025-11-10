<?php
class ProductController {
    private $productModel;
    
    public function __construct() {
        $this->productModel = new Product();
    }
    
    public function index() {
        $products = $this->productModel->getAll();
        $this->renderView('index', ['products' => $products]);
    }
    
    public function create() {
        $this->renderView('create');
    }
    
    public function store() {
        if ($_POST) {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'category' => $_POST['category']
            ];
            
            if ($this->productModel->create($data)) {
                header('Location: index.php?success=Produto criado com sucesso');
                exit;
            }
        }
        header('Location: index.php?error=Erro ao criar produto');
        exit;
    }
    
    public function edit($id) {
        if (!$id) {
            header('Location: index.php?error=ID inválido');
            exit;
        }
        
        $product = $this->productModel->getById($id);
        if (!$product) {
            header('Location: index.php?error=Produto não encontrado');
            exit;
        }
        
        $this->renderView('edit', ['product' => $product]);
    }
    
    public function update() {
        if ($_POST && isset($_POST['id'])) {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'category' => $_POST['category']
            ];
            
            if ($this->productModel->update($_POST['id'], $data)) {
                header('Location: index.php?success=Produto atualizado com sucesso');
                exit;
            }
        }
        header('Location: index.php?error=Erro ao atualizar produto');
        exit;
    }
    
    public function delete($id) {
        if (!$id) {
            header('Location: index.php?error=ID inválido');
            exit;
        }
        
        if ($this->productModel->delete($id)) {
            header('Location: index.php?success=Produto excluído com sucesso');
            exit;
        }
        
        header('Location: index.php?error=Erro ao excluir produto');
        exit;
    }
    
    private function renderView($view, $data = []) {
        // Define BASE_URL para as views
        $data['base_url'] = BASE_URL;
        extract($data);
        
        // Inclui o header, a view específica e o footer
        require_once "app/views/header.php";
        require_once "app/views/{$view}.php";
        require_once "app/views/footer.php";
    }
}
?>