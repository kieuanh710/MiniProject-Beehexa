<?php 
require_once './models/QuestionModel.php';
class OpennessModel extends QuestionModel{
    protected $table = 'openness'; 
    public function __construct(){
        parent::__construct('openness');
    }
}