<?php
class BaseModel extends Database{    
    protected $connect;
    // Database connection
    public function __construct() {
       $this->connect = $this->conn();
    }
}