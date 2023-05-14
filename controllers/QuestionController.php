<?php
require_once './models/QuestionModel.php';
class QuestionController extends BaseController{
  private $questions;
    public function __construct(){
      $this->questions = new QuestionModel();
    }
  public function index()
  {
    $questions = $this->questions->getAll();
    return $this->view('demo', [
        'questions' => $questions,
    ]);
   
  }
  
  public function update(){
    $courageQuestion = isset($_POST['courage']) ? implode(",", $_POST['courage']) : array();
    $opennessQuestion = isset($_POST['openness']) ? implode(",", $_POST['openness']) : "";
    $focusQuestion = isset($_POST['focus']) ? implode(",", $_POST['focus']) : "";
    $commitmentQuestion = isset($_POST['commitment']) ? implode(",", $_POST['commitment']) : "";
    $respectQuestion = isset($_POST['respect']) ? implode(",", $_POST['respect']) : "";
    
    
    $result1 = $this->questions->updateCourage($courageQuestion);
    $result2 = $this->questions->updateOpenness($opennessQuestion);
    $result3 = $this->questions->updateFocus($focusQuestion);
    $result4 = $this->questions->updateCommitment($commitmentQuestion);
    $result5 = $this->questions->updateRespect($respectQuestion);
    
    $count1 = $this->questions->countCourage();
    $count2 = $this->questions->countOpenness();
    $count3 = $this->questions->countFocus();
    $count4 = $this->questions->countCommitment();
    $count5 = $this->questions->countRespect();
   
    // print_r($focusQuestion);
    return $this->view('radar-chart', [
      'result1'=> $result1,
      'result2'=> $result2,
      'result3'=> $result3,
      'result4'=> $result4,
      'result5'=> $result5,
      'count1' => $count1,
      'count2' => $count2,
      'count3' => $count3,
      'count4' => $count4,
      'count5' => $count5,
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