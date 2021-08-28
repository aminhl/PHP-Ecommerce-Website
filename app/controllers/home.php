<?php

class Home extends Controller {
    public function index($a = '',$b = ''){
        $data['page_title'] = 'Home';
        $this->view('eshop/index',$data);
    }
}
