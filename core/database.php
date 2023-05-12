<?php 
class Database{
    public $con;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "miniproject";

    public function __construct() {
        $dsn = "mysql:host={$this->servername};dbname={$this->dbname}";

        try {
            $this->con = new PDO($dsn, $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->con;
    }
    public function query($sql) {
        return $this->con->query($sql);
    }
}