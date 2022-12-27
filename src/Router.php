<?php

switch ($_SERVER['REQUEST_URI']){

    case '/': require 'templates/pages/home.php'; break;
    case '/products': require 'templates/pages/products.php'; break;
}