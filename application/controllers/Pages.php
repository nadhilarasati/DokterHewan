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
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function aboutus()
    {
        $data['title'] = 'About Us';
        $this->load->view('templates/header', $data);
        $this->load->view('aboutus/index');
        $this->load->view('templates/footer');
    }

    public function facilities()
    {
        $data['title'] = 'Facilities';
        $this->load->view('templates/header', $data);
        $this->load->view('facilities/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function signup()
    {
        $data['title'] = 'Sign Up';
        $this->load->view('templates/header', $data);
        $this->load->view('signup/index');
        $this->load->view('templates/footer');
    }


    // ADMIN PAGE
    
}


