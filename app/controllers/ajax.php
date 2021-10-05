<?php

class Ajax extends Controller{
    public function index(){
      $data = file_get_contents("php://input");
      $data = json_decode($data);

      if (is_object($data)){
          if ($data->data_type == "add_category"){
              $category = $this->load_model('category');
              $check = $category->create($data);
              if (!empty($_SESSION['error'])){
                  $arr['message'] = $_SESSION['error'];
                  $_SESSION['error'] = "";
                  $arr['message_type'] = "error";
                  $arr['data'] = "";
                  $cats = $category->get_all();
                  if (is_array($cats)){
                      foreach ($cats as $cat_row){
                          echo '<tr>';
                          foreach ($cat_row as $value){
                              echo '<td> </td>';
                          }
                          echo '</tr>';
                      }
                  }
                  echo json_encode($arr);
              }else{
                  $arr['message'] = "Category Added Successfully";
                  $arr['message_type'] = "info";
                  $arr['data'] = "";
                  echo json_encode($arr);
              }
          }
      }
    }
}