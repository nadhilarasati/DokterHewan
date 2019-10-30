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

    //Navbar Login

    public function index()
    {

        $data['title'] = 'Home';
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('public/home/v_home');
        $this->load->view('templates/footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About Us';
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('public/aboutus/v_aboutus');
        $this->load->view('templates/footer');
    }

    public function facilities()
    {
        $data['title'] = 'Facilities';
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('public/facilities/v_facilities');
        $this->load->view('templates/footer');
    }

    //profile
    
    public function seeProfile()
    {
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_userProfile');
        $this->load->view('templates/footer');
    }

    public function seePets()
    {
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_petsProfile');
        $this->load->view('templates/footer');
    }

    public function seeDetail()
    {
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_detail');
        $this->load->view('templates/footer');
    }
}
