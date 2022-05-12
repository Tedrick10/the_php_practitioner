<?php
    
    $query = require "./core/bootstrap.php";

    $routes = [
        "" => "controllers/index.controller.php",
        "about" => "controllers/about.controller.php",
        "about/culture" => "controllers/about_culture.controller.php",
        "contact" => "controllers/contact.controller.php",
    ];

?>