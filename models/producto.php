<?php
require_once __DIR__ . '/../config/Database.php';

class Producto {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM gestioProducto";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}