<?php

    require "database/connection.php";
    require "database/query_builder.php";
    $config = require "config.php";
    
    return new QueryBuilder(Connection::make($config["database"]));
    
?>