<?php

class Ajax extends Controller{
    public function index(){

      $data = file_get_contents("php://input");
      print_r(json_decode($data));

    }
}