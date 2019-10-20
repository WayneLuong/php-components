
<?php
//get category api

class Category {
    //DB stuff
    private $conn;
    private $table = 'category';

     // Post Properties
     public $id;
     public $name;
     public $created_at;

    // Constructor with DB
    public function __construct($db) {
        $this->conn = $db;
    }

    //methods here
}