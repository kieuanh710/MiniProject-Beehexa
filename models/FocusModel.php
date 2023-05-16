<?php 
require_once './models/QuestionModel.php';

class FocusModel extends QuestionModel{
    protected $table = 'focus'; 

    public function __construct(){
        parent::__construct('focus');
    }
}