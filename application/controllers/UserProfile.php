<?php

class UserProfile extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->library('form_validation');
        // if ($this->session->userdata('logged_in') !== TRUE) {
        //     redirect('login');
        // }
    }

    public function seeProfile(){
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('public/profile/v_userProfile');
        $this->load->view('templates/footer');
    }
}