
<?php

require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    public function index()
    {
        $cliente = new Cliente();

        $clientes = $cliente->getAll();

        require_once __DIR__ . '/../views/cliente/index.php';
    }
}