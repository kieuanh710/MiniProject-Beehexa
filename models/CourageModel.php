<?php 
require_once './models/QuestionModel.php';

class CourageModel extends QuestionModel{
    protected $table = 'courage'; 

    public function __construct(){
        parent::__construct('courage');
    }
}