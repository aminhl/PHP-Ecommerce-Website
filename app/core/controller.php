<?php

class Controller{
    public function view($path,$data = []){
        if (file_exists('../app/views/' . THEME . $path . '.php')){
            include_once '../app/views/' . THEME .$path . '.php';
        }
    }
}
