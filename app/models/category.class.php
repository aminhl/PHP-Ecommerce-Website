<?php

class Category{
    public function create($DATA){
        $DB = Database::getinstance();
        $arr["category"] = $DATA->data;
        if (!preg_match("/^[a-zA-Z]$/",$arr["category"])){
            $_SESSION['error'] = "Please Enter A Valid Category Name";
        }
        if (empty($_SESSION['error'])){
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
}