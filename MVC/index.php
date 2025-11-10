<?php
// Configurações básicas
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));
define('BASE_PATH', __DIR__);

// Autoload simples
spl_autoload_register(function($class) {
    $paths = [
        'app/controllers/',
        'app/models/',
        'app/'
    ];
    
    foreach ($paths as $path) {
        $file = BASE_PATH . '/' . $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Incluir arquivos necessários
require_once 'app/controllers/ProductController.php';
require_once 'app/models/Product.php';
require_once 'app/Database.php';

// Roteamento básico
$action = $_GET['action'] ?? 'index';
$controller = new ProductController();

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($_GET['id'] ?? null);
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete($_GET['id'] ?? null);
        break;
    default:
        $controller->index();
        break;
}
?>