<?php
require_once 'controller/MobilController.php';

$controller = new MobilController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action === 'create') {
    $controller->create();
} elseif ($action === 'delete') {
    $id = $_GET['id'];
    $controller->delete($id);
} else {
    $controller->index();
}
?>
