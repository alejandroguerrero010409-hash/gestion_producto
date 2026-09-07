<?php

class Database {

    private $host;
    private $port;
    private $dbName;
    private $user;
    private $password;
    private $connection;

    public function __construct() {
        $env = parse_ini_file(__DIR__ . "/../.env");

        $this->host = $env['DB_HOST'] ?? '127.0.0.1';
        $this->port = $env['DB_PORT'] ?? '3306';
        $this->dbName = $env['DB_NAME'] ?? 'gestioproducto';
        $this->user = $env['DB_USER'] ?? 'root';
        $this->password = $env['DB_PASSWORD'] ?? '';
    }

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbName};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            $dsn = "mysql:host=127.0.0.1;dbname={$this->dbName};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->user, $this->password);
        }

        return $this->connection;
    }
}