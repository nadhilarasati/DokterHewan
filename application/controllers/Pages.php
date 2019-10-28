<?php

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('public/home/v_home');
        $this->load->view('templates/footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About Us';
        $this->load->view('templates/header', $data);
        $this->load->view('public/aboutus/v_aboutus');
        $this->load->view('templates/footer');
    }

    public function facilities()
    {
        $data['title'] = 'Facilities';
        $this->load->view('templates/header', $data);
        $this->load->view('public/facilities/v_facilities');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('public/login/v_loginPublic');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('public/login/v_userProfile');
        $this->load->view('templates/footer');
    }

    // ADMIN PAGE
    
}


