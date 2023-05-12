<?php
require_once './core/database.php';
class QuestionModel{
  
  private $conn;
  public function __construct(){
    $this->conn = new Database();
  }
    public function getAll() {
      $sql = "SELECT * FROM courage_type1";
      $result = $this->conn->getConnection()->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    // public function updateQuestionCount($id){
    //   $sql = "UPDATE courage_type1 SET value = 1 WHERE id = $id";
    //   return $this->conn->getConnection()->prepare($sql);
    // }
  
    public function updateQuestionValue($courageQuestion) {
      // update courage answers in database
      $courageQuery = "UPDATE courage_type1 SET value = 0";
      $this->conn->getConnection()->query($courageQuery);
      $answers = explode(',', $courageQuestion);
      foreach ($answers as $answer) {
          $courageQuery = " UPDATE courage_type1 SET value = 1 WHERE id = $answer;";
          $this->conn->getConnection()->query($courageQuery);
          // print_r($courageQuery);
      }
    }
  public function countCheckedCheckboxes() {
      $query = "SELECT COUNT(*) AS total FROM courage_type1 WHERE value = 1 AND type_name = 'courage'";
      $result = $this->conn->getConnection()->query($query);
      return $result->fetch(PDO::FETCH_ASSOC)['total'];
      
    }

} 

// class FormModel
// 

//     public function getCourageData() {
//       $db = new PDO("mysql:host=localhost;dbname=miniproject", "username", "password");

//       $questionIds = array(1, 2, 3);
//       $data = array();
//       foreach ($questionIds as $id) {
//           // Retrieve count of checkbox ticks for this question from the database
//           $count = $db->query("SELECT COUNT(*) FROM courage_type1 WHERE id = $id ")->fetchColumn();
//           // Add count to data array
//           $data["Question $id"] = $count;
//       }
//       return $data;
//   }

//   // public function getOpennessData() {
//   //   $db = new PDO("mysql:host=localhost;dbname=miniproject", "username", "password");

//   //     $questionIds = array(4, 5, 6);
//   //     $data = array();
//   //     foreach ($questionIds as $id) {
//   //         // Retrieve count of checkbox ticks for this question from the database
//   //         $count = $db->query("SELECT COUNT(*) FROM responses WHERE question_id = $id AND category = 'Openness'")->fetchColumn();
//   //         // Add count to data array
//   //         $data["Question $id"] = $count;
//   //     }
//   //     return $data;
//   // }
// }