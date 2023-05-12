<?php 
class BaseController{
    const VIEW_FOLDER_NAME = 'view';
    protected function view($viewPath, array $data = []){
        foreach($data as $key => $value){
            $$key = $value;
        }

        // string concatenation
        require (self::VIEW_FOLDER_NAME . '/' . str_replace('.','/', $viewPath).'.php');
    }
    // protected function view($viewPath, array $data = []){
    //     // echo '<pre>';
    //     // print_r($data);
    //     // echo '</pre>';
    //     // die;
    //     // $viewPath = self::VIEW_FOLDER_NAME . '/' 
    //     //         . str_replace('.','/', $viewPath).'.php';
    //     // return require ($viewPath);
    //     foreach($data as $key => $value){
    //         $$key = $value;
    //     }
    // echo '<pre>';
    //     print_r($a);
    //     echo '</pre>';
    //     // // string concatenation
    //     require ('/' . str_replace('.','/', $viewPath).'.php');
    // }
}