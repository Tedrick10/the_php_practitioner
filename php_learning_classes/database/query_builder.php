<?php
    
    class QueryBuilder {
        private $pdo;

        public function __construct(PDO $pdo) 
        {
            $this -> pdo = $pdo;
        }

        public function selectAll($table) {
            $statement = $this -> pdo -> prepare("select * from {$table};");
            $statement -> execute();

            // $tasks = $statement -> fetchAll(PDO::FETCH_OBJ);
            return $statement -> fetchAll(PDO::FETCH_CLASS);
        }
    }
    
?>