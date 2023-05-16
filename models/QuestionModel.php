<?php
require_once './core/database.php';
class QuestionModel
{
  protected $conn;
  protected $table;
  public function __construct($table)
  {
    $this->conn = new Database();
    $this->table = $table;
  }
  public function getAll()
  {
    $sql = "SELECT * FROM $this->table";
    $result = $this->conn->getConnection()->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  public function updateQuestion($value)
  {
    // update table answers in database
    $sql = "UPDATE $this->table SET value = 0 WHERE type_name= '$this->table'";
    $this->conn->getConnection()->query($sql);
    $answers = explode(',', $value);
    foreach ($answers as $answer) {
      $sql = " UPDATE $this->table SET value = 1 WHERE id = $answer;";
      $this->conn->getConnection()->query($sql);
    }
      // print_r($value);

  }
  public function countValue()
  {
    $courage = "SELECT COUNT(*) AS total FROM $this->table WHERE value = 1";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
}