<?php
require_once 'controllers/PackageController.php';

$controller = new PackageController();

// Routing
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'index':
        $controller->routing();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        echo "Action not found.";
}
?>
