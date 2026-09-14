<?php

require_once __DIR__ . '/../models/categoria.php';

class CategoriaController
{
    public function index()
    {
        $categoria = new Categoria();

        $categorias = $categoria->getAll();

        require_once __DIR__ . '/../views/categoria/index.php';
    }
}