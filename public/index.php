<?php

require_once __DIR__ . "/../controllers/productoController.php";
require_once __DIR__ . "/../controllers/clienteController.php";
require_once __DIR__ . "/../controllers/proveedorController.php";


$productoController = new ProductoController();
$productoController->index();
  
$clienteController = new ClienteController();
$clienteController->index();

$proveedorController = new ProveedorController();
$proveedorController->index();











