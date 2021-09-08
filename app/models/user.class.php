<?php

class User{
    private $error = "";
    public function signup($POST){
        $data = array();
        $db = Database::getinstance();
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
        # Check If Email Already Exists
        $sql = 'select * from users where email = :email limit 1';
        $arr['email'] = $data['email'];
        $check = $db->read($sql,$arr);
        if (is_array($check)){
            $this->error .= 'That Email Is Already In Use </br>';
        }

        # Check Of The url_address
        $data['url_address'] = $this->get_random_string_max(60);
        $sql = 'select * from users where url_address = :url_address limit 1';
        $arr = false;
        $arr['url_address'] = $data['url_address'];
        $check = $db->read($sql,$arr);
        if (is_array($check)){
            $data['url_address'] = $this->get_random_string_max(60);
        }

        if (empty($this->error)){
            $data['rank'] = 'customer';
            $data['date'] = date("Y-m-d H:i:s");
            $data['password'] = hash('sha1',$data['password']);
            $query = "insert into users (url_address,name,email,password,date,rank) value (:url_address,:name,:email,:password,:date,:rank)";
            $result = $db->write($query,$data);
            if ($result){
                header('Location:'. ROOT . 'login');
                die;
            }
        }
        $_SESSION['error'] = $this->error;
    }
    public function login($POST){

        $data = array();
        $db = Database::getinstance();

        $data['email'] = trim($_POST['email']);
        $data['password'] = trim($_POST['password']);

        if (empty($data['email']) ||!preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['email'])){
            $this->error .= 'Please Enter A Valid Email </br>';
        }
        if (strlen($data['password'] < 4)){
            $this->error .= 'Password Must Be At Least 4 Characters Long </br>';
        }

        if (empty($this->error)){
            show($POST);
            $data['password'] = hash('sha1',$data['password']);
            # Check If The User Exist
            $sql = 'select * from users where email = :email && password = :password limit 1';
            $result = $db->read($sql,$data);
            if (is_array($result)){
                $_SESSION['user_url'] = $result[0]->url_address;
                header('Location:'. ROOT . 'home');
                die;
            }
            $this->error .= 'Wrong Email Or Password .</br>';
        }
        $_SESSION['error'] = $this->error;
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
    public function check_login($redirect = false){
        if (isset($_SESSION['user_url'])){
            $arr['url'] = $_SESSION['user_url'];
            $query = 'select * from users where url_address = :url limit 1';
            $db = Database::getinstance();
            $result =  $db->read($query,$arr);
            if (is_array($result)){
                return $result[0];
            }
        }
        if ($redirect){
            header('Location:' . ROOT . 'login');
            die();
        }
        return false;
    }
    public function logout(){
        if (isset($_SESSION['user_url'])){
            unset($_SESSION['user_url']);
        }
        header('Location:'. ROOT . 'home');
        die;
    }
}
