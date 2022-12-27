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
}