<?php

require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    public function index()
    {
        $producto = new Producto();

        // 1. Obtiene todos los productos
        $productos = $producto->getAll();

        // 2. Obtiene un producto en específico por ID (ejemplo: ID 1)
        $producto_consulta = $producto->getById(5);

        require_once __DIR__ . '/../views/producto/index.php';
    }
}