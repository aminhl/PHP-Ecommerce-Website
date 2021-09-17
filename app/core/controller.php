<?php

class Controller{
    public function view($path,$data = []){
        if (file_exists('../app/views/' . THEME . $path . '.php')){
            include_once '../app/views/' . THEME .$path . '.php';
        }
        else{
            include_once '../app/views/' . THEME . '404.php';
        }
    }
    public function load_model($model){
        if (file_exists('../app/models/' . strtolower($model) . '.class.php')){
            include_once '../app/models/' . strtolower($model) . '.class.php';
            return $a = new $model();
        }
       return false;
    }
}
