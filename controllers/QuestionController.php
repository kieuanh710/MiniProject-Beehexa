<?php
require_once './models/QuestionModel.php';
require_once './core/database.php';
class QuestionController extends BaseController{
  private $questions;
    public function __construct(){
        $this->questions = new QuestionModel();
    }
  public function index()
  {
    $questions = $this->questions->getAll();
    // $a = [
    //   [ 
    //     'id'=>1,
    //     'name' => 'laptop' 
    //   ],
    // ];
    return $this->view('demo', [
        'questions' => $questions,
        // 'a' => $a,
    ]);
   
  }
  
  public function update(){
    $courageQuestion = isset($_POST['courage']) ? implode(",", $_POST['courage']) : array();
    // $opennessQuestion = isset($_POST['openness']) ? implode(",", $_POST['openness']) : "";
    
    $result = $this->questions->updateQuestionValue($courageQuestion);
    $count = $this->questions->countCheckedCheckboxes();
    return $this->view('radar-chart', [
      'results'=> $result,
      'count' => $count,
    ]);     
        // print_r($_POST);
  }
  
  // public function getCount(){
  //   $result = $this->questions->countCheckedCheckboxes();
  //   return $this->view('radar-chart', [
  //     'results'=> $result,
  //   ]);
         
  //         // print_r($_POST);
  // }
  // public function countCheckedCheckboxes() {
  //   $count = $this->questions->countCheckedCheckboxes();
  //   $data = array('count' => $count);
  //   return $data;
  // }

}