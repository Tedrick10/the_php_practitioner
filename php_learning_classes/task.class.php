<?php
class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description) {
        $this -> description = $description;
    }

    public function complete() {
        $this -> completed = true;
    }
    
    public function description() {
        return $this -> description;
    }

    public function isCompleted() {
        return $this -> completed;
    }
}
?>