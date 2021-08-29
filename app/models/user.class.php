<?php

class User{
    private $error = "";
    public function signup($POST){
        $data = array();
        $data['name'] = trim($_POST['name']);
        $data['email'] = trim($_POST['email']);
        $data['password'] = trim($_POST['password']);
        $password2 = trim($_POST['password2']);
        if (empty($data['email']) ||!preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['email'])){
            $this->error .= 'Please Enter A Valid Email </br>';
        }
        if (empty($data['name']) || !preg_match("/^[a-zA-Z]+$/",$data['name'])){
            $this->error .= 'Please Enter A Valid Name </br>';
        }
        if ($data['password'] !==  $password2){
            $this->error .= 'Password Does Not Match </br>';
        }
        if (strlen($data['password'] < 4)){
            $this->error .= 'Password Must Be At Least 4 Characters Long </br>';
        }

        if (empty($this->error)){
            $data['rank'] = 'customer';
            $data['url_address'] = $this->get_random_string_max(60);
            $data['date'] = date("Y-m-d H:i:s");
            $query = "insert into users (url_address,name,email,password,date,rank) value (:url_address,:name,:email,:password,:date,:rank)";
            $db = Database::getinstance();
            $result = $db->write($query,$data);
            if ($result){
                header('Location:'. ROOT . 'login');
                die;
            }
        }
    }
    public function login($POST){

    }
    public function get_user($url){

    }
    private function get_random_string_max($length){
        $array = array(1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','E','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $text = '';
        $length = rand(4,$length);
        for ($i=0;$i<$length;$i++){
            $random = rand(0,61);
            $text .= $array[$random];
        }
        return $text;
    }
}
