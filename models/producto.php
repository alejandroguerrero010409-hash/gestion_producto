<?php

require_once __DIR__ . '/../config/Database.php';

class Producto {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT 
                    p.id,
                    p.nombre,
                    p.precio,
                    p.cantidad,
                    pr.nombre As proveedor,
                    c.nombre As categoria
                FROM gestioproducto p
                LEFT JOIN proveedor pr 
                    ON p.id_proveedor = pr.id
                LEFT JOIN categoria c 
                    ON p.id_categoria = c.id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        try {

            $id = intval($id);

            $sql = "SELECT
                        p.id,
                        p.nombre,
                        p.precio,
                        p.cantidad,
                        pr.nombre As proveedor,
                        c.nombre AS categoria
                    FROM gestioproducto p
                    LEFT JOIN proveedor pr
                        ON p.id_proveedor = pr.id
                    LEFT JOIN categoria c
                        ON p.id_categoria = c.id
                    WHERE p.id = :id";

            $producto_consulta = $this->connection->prepare($sql);

            $producto_consulta->bindParam(
                ':id',
                $id,
                PDO::PARAM_INT
            );

            $producto_consulta->execute();

            return $producto_consulta->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error en la base de datos: " . $e->getMessage();

            return null;
        }
    } // Closed getById() method
} // Closed Producto class