<?php

class Logout extends Controller{
    public function index(){
        $user = $this->load_model('user');
        $user->logout();
    }
}