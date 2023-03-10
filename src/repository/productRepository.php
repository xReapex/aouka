<?php

namespace App\repository;

use App\manager\databaseManager;
use App\Autoloader;

// Use Autoloader
require_once 'src/Autoloader.php';
Autoloader::register();

class productRepository
{
    private $dbManager;
    private $conn;

    public function __construct()
    {
        $this->dbManager = new databaseManager();
        $this->conn = $this->dbManager->getConn();
    }

    public function getAll()
    {
        return $this->conn->query("SELECT * FROM products");
    }

    public function isProductExists($id)
    {
        return $this->conn->query("SELECT * FROM products WHERE id=". $id);
    }

    public function findById($id)
    {
        return $this->conn->query("SELECT * FROM products WHERE id=". $id);
    }
}