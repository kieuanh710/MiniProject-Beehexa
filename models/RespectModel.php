<?php 
require_once './models/QuestionModel.php';

class RespectModel extends QuestionModel{
    protected $table = 'respect'; 

    public function __construct(){
        parent::__construct('respect');
    }
}