<?php
require_once './models/FocusModel.php';
require_once './models/OpennessModel.php';
require_once './models/CourageModel.php';
require_once './models/RespectModel.php';
require_once './models/CommitmentModel.php';
class QuestionController extends BaseController{
  private $focusModel, $opennessModel, $courageModel, $respectModel, $commitmentModel;
    public function __construct(){
      $this->focusModel = new FocusModel();
      $this->opennessModel = new OpennessModel();
      $this->courageModel = new CourageModel();
      $this->respectModel = new RespectModel();
      $this->commitmentModel = new CommitmentModel();
    }
  public function index()
  {
    // $focusModel = new FocusModel();
    $focusQuestions = $this->focusModel->getAll();
    $opennessQuestions = $this->opennessModel->getAll();
    $courageQuestions = $this->courageModel->getAll();
    $respectQuestions = $this->respectModel->getAll();
    $commitmentQuestions = $this->commitmentModel->getAll();
    
    return $this->view('question', [
      'focusQuestions' =>$focusQuestions,
      'opennessQuestions' =>$opennessQuestions,
      'courageQuestions' =>$courageQuestions,
      'respectQuestions' =>$respectQuestions,
      'commitmentQuestions' =>$commitmentQuestions,

    ]);
  }
  
  public function update(){
    $courageQuestion = isset($_POST['courage']) ? implode(",", $_POST['courage']) : 0;
    $opennessQuestion = isset($_POST['openness']) ? implode(",", $_POST['openness']) : 0;
    $focusQuestion = isset($_POST['focus']) ? implode(",", $_POST['focus']) : 0;
    $commitmentQuestion = isset($_POST['commitment']) ? implode(",", $_POST['commitment']) : 0;
    $respectQuestion = isset($_POST['respect']) ? implode(",", $_POST['respect']) : 0;
    
    
    $this->courageModel->updateQuestion($courageQuestion);
    $this->opennessModel->updateQuestion($opennessQuestion);
    $this->focusModel->updateQuestion($focusQuestion);
    $this->commitmentModel->updateQuestion($commitmentQuestion);
    $this->respectModel->updateQuestion($respectQuestion);
    
    $countCourage = $this->courageModel->countValue();
    $countOpenness = $this->opennessModel->countValue();
    $countFocus = $this->focusModel->countValue();
    $countCommitment = $this->commitmentModel->countValue();
    $countRespect = $this->respectModel->countValue();
   
    // // print_r($focusQuestion);
    return $this->view('radar-chart', [
      'countCourage' => $countCourage,
      'countOpenness' => $countOpenness,
      'countFocus' => $countFocus,
      'countCommitment' => $countCommitment,
      'countRespect' => $countRespect,
    ]);     
        // print_r($_POST);
  }
}