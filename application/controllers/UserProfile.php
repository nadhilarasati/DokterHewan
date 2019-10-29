<?php

class UserProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->library('form_validation');
        // if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("pages/login"));
		// }
        // if ($this->session->userdata('logged_in') == TRUE) {
        //     $this->load->view('templates/headerLogin');
        //     $this->load->view('public/profile/v_userProfile');
        //     $this->load->view('templates/footer');
        // } else {
        //     redirect('pages/login');
        // }
    }
    
    public function seeProfile()
    {
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_userProfile');
        $this->load->view('templates/footer');
    }
}
