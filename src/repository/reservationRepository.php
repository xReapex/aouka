<?php

namespace App\repository;

use App\manager\databaseManager;
use App\Autoloader;

// Use Autoloader
require_once 'src/Autoloader.php';
Autoloader::register();

class reservationRepository
{
    private $dbManager;
    private $conn;

    public function __construct()
    {
        $this->dbManager = new databaseManager();
        $this->conn = $this->dbManager->getConn();
    }

    public function add($name, $sname, $guest, $boat, $date, $datef)
    {
        $this->conn->query("INSERT INTO `reservation` (name, sname, guest, boat, date, datef) VALUES ('$name', '$sname', '$guest', '$boat', '$date', '$datef') ");
    }
}