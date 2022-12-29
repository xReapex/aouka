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

    public function __construct()
    {
        $this->dbManager = new databaseManager();
    }

    public function getAll()
    {
        $conn = $this->dbManager->getConn();
        $products = $conn->query("SELECT * FROM products");
        return $products;
    }

    public function isProductExists($id)
    {
        $conn = $this->dbManager->getConn();
        $product = $conn->query("SELECT * FROM products WHERE id=". $id);

        // change here
        if ($product->fetch_assoc() == null){ return false; } else { return true; };
    }

    public function findById($id)
    {
        $conn = $this->dbManager->getConn();
        $product = $conn->query("SELECT * FROM products WHERE id=". $id);
        return $product;
    }
}