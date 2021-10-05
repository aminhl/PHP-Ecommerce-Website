<?php

class Category{
    public function create($DATA){
        $DB = Database::getinstance();
        $arr["category"] = ucwords($DATA->data);
        if (!preg_match("/^[a-zA-Z]+$/",trim($arr["category"]))){
            $_SESSION['error'] = "Please Enter A Valid Category Name";
        }
        if (!isset($_SESSION['error']) || empty($_SESSION['error'])){
            $query = "insert into  categories (category) values (:category) ";
            $check = $DB->write($query,$arr);
            if ($check){
                return true;
            }
        }
    return false;
    }
    public function edit($DATA){

    }
    public function delete($DATA){

    }
    public function get_all(){
        $DB = Database::getinstance();
        return $DB->read("select * from categories");
    }
}