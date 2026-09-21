<?php

class Database
{
    private $host;
    private $port;
    private $dbName;
    private $user;
    private $password;
    private $connection;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../.env');

        $this->host = $env['DB_HOST'] ?? '127.0.0.1';
        $this->port = $env['DB_PORT'] ?? '3306';
        $this->dbName = $env['DB_NAME'] ?? 'gestioproducto';
        $this->user = $env['DB_USER'] ?? 'root';
        $this->password = $env['DB_PASSWORD'] ?? '';
    }

    public function connect()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        // Primer intento: con los datos del .env
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbName};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->user, $this->password, $options);
            return $this->connection;
        } catch (PDOException $e) {
            // Si falla el primer intento, pasamos al segundo
        }

        // Segundo intento: fallback a 127.0.0.1
        try {
            $dsn = "mysql:host=127.0.0.1;port={$this->port};dbname={$this->dbName};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->user, $this->password, $options);
            return $this->connection;
        } catch (PDOException $e) {
            // Si ambos fallan, relanzamos la excepción para que sea capturada por el llamador
            throw new PDOException("Error de conexión a la base de datos: " . $e->getMessage(), (int)$e->getCode());
        }
    }
}