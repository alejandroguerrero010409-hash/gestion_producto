<?php
require_once __DIR__ . '/../config/Database.php';

class Cliente {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT * FROM cliente";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        try {
            $id = intval($id);

            $sql = "SELECT * FROM clien WHERE id = :id";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error en la base de datos: " . $e->getMessage();
            return null;
        }
    }
}
