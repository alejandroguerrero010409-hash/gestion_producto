<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {

    public function index() {
        $producto = new Producto();
        $productos = $producto->getAll();

        require_once __DIR__ . '/../views/index.php';
    }
}