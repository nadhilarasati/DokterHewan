<?php

class UserProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->model("m_admin");
        $this->load->library('session');
        $this->load->library('form_validation');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('pages/login');
        }
    }

    //Navbar Login

    public function index()
    {
        $data['title'] = 'Home';
        $data['data_pemilik'] = $this->m_user->getPemilikById($this->session->userdata('email'));
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
        $data['data_pemilik'] = $this->m_user->getPemilikById($this->session->userdata('email'));
        $validation = $this->form_validation->set_rules('passBaru', 'Password Baru', 'required');
        if ($validation->run()) {
            $this->m_user->editPassword($this->session->userdata('email'));
            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('UserProfile/seeProfile');
        }
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_userProfile');
        $this->load->view('templates/footer');
    }

    public function seePets()
    {
        $data['title'] = 'Profile';
        $data['data_hewan'] = $this->m_user->getHewanById($this->session->userdata('email'));
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_petsProfile');
        $this->load->view('templates/footer');
    }

    public function seeDetail($idHewan = null)
    {
        $data['title'] = 'Profile';
        $data['data_pet'] = $this->m_admin->getHewan($idHewan);
        $data['data_medis'] = $this->m_admin->getRekamMedis($idHewan);
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('templates/sidebarMedis', $data);
        $this->load->view('public/profile/v_detail');
        $this->load->view('templates/footer');
    }
}
