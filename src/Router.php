<?php

//Remove parameters
switch (explode("/", $_SERVER['REQUEST_URI'])[1]){
    case '': require 'templates/pages/home.php'; break;
    case 'products': require 'templates/pages/products.php'; break;
    case 'boat': require 'templates/pages/boat.php'; break;
    case 'reservation': require 'templates/pages/reservation.php'; break;
    case 'receipt': require 'templates/pages/receipt.php'; break;
}