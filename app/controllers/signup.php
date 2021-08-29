<?php

class Signup extends Controller{
    public function index(){
        $data['page_title'] = 'Signup';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            show($_POST);
        }
        $this->View('signup',$data);
    }
}
