<?php


class Profile extends Controller
{
    public function index($a = '', $b = '')
    {
        $user = $this->load_model('user');
        $user_data = $user->check_login(true);
        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }
        $data['page_title'] = 'Profile';
        $this->view('profile', $data);
    }
}