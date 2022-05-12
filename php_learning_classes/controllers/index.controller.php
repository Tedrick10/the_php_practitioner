<?php 

    require "core/task.class.php";
    
    $tasks = $query -> selectAll("todos");

    require "views/index.view.php";

?>