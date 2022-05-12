<?php
    require "./core/task.class.php";
    require "./core/functions.php";
    
    $query = require "./core/bootstrap.php";
    $tasks = $query -> selectAll("todos");

    require "./views/index.view.php";
?>