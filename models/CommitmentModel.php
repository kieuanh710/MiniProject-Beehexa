<?php 
require_once './models/QuestionModel.php';

class CommitmentModel extends QuestionModel{
    protected $table = 'commitment'; 

    public function __construct(){
        parent::__construct('commitment');
    }
}