<?php

class Signup extends Controller{
    public function index(){
        $data['page_title'] = 'Signup';
        $this->View('signup',$data);
    }
}
