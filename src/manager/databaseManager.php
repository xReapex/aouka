<?php

namespace App\manager;

use App\Autoloader;
use mysqli;

// Use Autoloader
require_once 'src/Autoloader.php';
Autoloader::register();

class databaseManager
{
    public function __construct()
    {
        $dbConfig = require_once 'config.php';
        $dbConfig = $dbConfig['database'];

        $conn = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['base']);
        if( $conn->connect_error ) {
            die("Error : MYSQL cannot connect to your database.");
        }
    }
}