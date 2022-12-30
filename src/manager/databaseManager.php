<?php

namespace App\manager;

use App\Autoloader;
use mysqli;

// Use Autoloader
require_once 'src/Autoloader.php';
Autoloader::register();

class databaseManager
{
    protected $conn;

    public function __construct()
    {
        $dbConfig = require 'config.php';
        $dbConfig = $dbConfig['database'];

        $conn = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['base']);
        if( $conn->connect_error ) {
            die("Error : MYSQL cannot connect to your database.");
        }
        $conn->set_charset("utf8");
        $this->conn = $conn;
    }

    /**
     * @return mysqli
     */
    public function getConn()
    {
        return $this->conn;
    }
}