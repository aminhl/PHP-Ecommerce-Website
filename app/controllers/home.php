<?php

class Home extends Controller {
    public function index($a = '',$b = ''){
        $user = $this->load_model('user');
        $data['user_data'] = $user->check_login();
        if (is_array($data['user_data'])){
            $data['user_data'] = $user_data;
        }
        $data['page_title'] = 'Home';
        $this->view('index',$data);
    }
}
