<?php

class Category{
    public function create($DATA){
        $DB = Database::getinstance();
        $category = $DATA->data;
        $DB->write($query,$arr);
    }
    public function edit($DATA){

    }
    public function delete($DATA){

    }
}