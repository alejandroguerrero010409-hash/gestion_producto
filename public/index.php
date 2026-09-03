<?php
require_once __DIR__ . "/../controllers/ProductoController.php";

$productoController = new ProductoController();
$productoController->index();