<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$productoController = new ProductoController();
$productoController->index();

require_once __DIR__ . "/../controllers/ClienteController.php";

$clienteController = new ClienteController();
$clienteController->index();

require_once __DIR__ . "/../controllers/ProveedorController.php";

$proveedorController = new ProveedorController();
$proveedorController->index();