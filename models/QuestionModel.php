<?php
require_once './core/database.php';
class QuestionModel
{
  private $conn;
  public function __construct()
  {
    $this->conn = new Database();
  }
  public function getAll()
  {
    $sql = "SELECT * FROM courage_type1";
    $result = $this->conn->getConnection()->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  public function updateCourage($courageQuestion)
  {
    // update courage answers in database
    $courageQuery = "UPDATE courage_type1 SET value = 0 WHERE type_name ='courage'";
    $this->conn->getConnection()->query($courageQuery);
    $answers = explode(',', $courageQuestion);
    foreach ($answers as $answer) {
      $courageQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer AND type_name ='courage';";
      $this->conn->getConnection()->query($courageQuery);
      // print_r($courageQuery);
    }
  }
  public function updateOpenness($opennessQuestion)
  {  
    $opennessQuery = "UPDATE courage_type1 SET value = 0 WHERE type_name ='openness'";
    $this->conn->getConnection()->query($opennessQuery);
    $answers = explode(',', $opennessQuestion);
    foreach ($answers as $answer) {
      $opennessQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer AND type_name ='openness';";
      $this->conn->getConnection()->query($opennessQuery);
      // print_r($opennessQuery);
    }
  }
  public function updateFocus($focusQuestion)
  {
    $focusQuery = "UPDATE courage_type1 SET value = 0 WHERE type_name ='focus'";
    $this->conn->getConnection()->query($focusQuery);
    $answers = explode(',', $focusQuestion);
    foreach ($answers as $answer) {
      $focusQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer AND type_name ='focus';";
      $this->conn->getConnection()->query($focusQuery);
      // print_r($focusQuery);
    }
  }
  public function updateCommitment($commitmentQuestion)
  {
    $commitmentQuery = "UPDATE courage_type1 SET value = 0 WHERE type_name ='commitment'";
    $this->conn->getConnection()->query($commitmentQuery);
    $answers = explode(',', $commitmentQuestion);
    foreach ($answers as $answer) {
      $commitmentQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer AND type_name ='commitment';";
      $this->conn->getConnection()->query($commitmentQuery);
      // print_r($commitmentQuery);
    }
  }
  public function updateRespect($respectQuestion)
  {
    $respectQuery = "UPDATE courage_type1 SET value = 0 WHERE type_name ='respect'";
    $this->conn->getConnection()->query($respectQuery);
    $answers = explode(',', $respectQuestion);
    foreach ($answers as $answer) {
      $respectQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer AND type_name ='respect';";
      $this->conn->getConnection()->query($respectQuery);
      // print_r($respectQuery);
    }
  }
  public function countCourage()
  {
    $courage = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'courage'";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
  public function countOpenness()
  {
    $courage = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'openness'";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
  public function countFocus()
  {
    $courage = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'focus'";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
  public function countRespect()
  {
    $courage = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'commitment'";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
  public function countCommitment()
  {
    $courage = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'respect'";
    $result = $this->conn->getConnection()->query($courage);
    return $result->fetch(PDO::FETCH_ASSOC)['total'];
  }
}