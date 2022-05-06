<?php
    require "task.class.php";

    try {
        $pdo = new PDO("mysql:host=127.0.0.1; dbname=mytodo" , "root", "");
    } catch (PDOException $e) {
        die("Could not connect!");    
    }
    
    $statement = $pdo -> prepare("select * from todos;");
    $statement -> execute();

    echo "<pre>";
    var_dump($statement -> fetchAll());
    echo "</pre>";
    
    die();
    
    require "index.view.php";
?>