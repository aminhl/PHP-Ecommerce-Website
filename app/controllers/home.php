<?php

class Home extends Controller {
    public function index($a = '',$b = ''){
        $this->view('eshop/index');
    }
}
