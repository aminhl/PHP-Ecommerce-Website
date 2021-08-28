<?php

class Controller{
    public function view($path,$data = []){
        if (file_exists('../app/views/' . $path . '.php')){
            include_once '../app/views/' . $path . '.php';
        }
    }
}
