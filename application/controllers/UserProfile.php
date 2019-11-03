<?php

class UserProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
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

    public function seeDetail($idHewan=null)
    {
        $data['title'] = 'Profile';
        $data['data_pet'] = $this->m_user->getHewan($idHewan);
        $data['data_medis'] = $this->m_user->getRekamMedis($idHewan);
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('templates/sidebarMedis', $data);
        $this->load->view('public/profile/v_detail');
        $this->load->view('templates/footer');
    }

    public function ubahPassword()
    {
        $data['title'] = 'Password';
        
        $this->load->view('templates/headerLogin', $data);
        $this->load->view('templates/sidebarProfile', $data);
        $this->load->view('public/profile/v_ubahPassword');
        $this->load->view('templates/footer');
    }

    public function ganti(){
        $email = $this->session->userdata['email'];
        $this->form_validation->set_rules('password baru','password baru','required');
        $this->form_validation->set_rules('password kedua','password kedua','required|matches[pw_baru]');
        $this->form_validation->set_message('required','%s wajib diisi');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('UserProfile/ubahPassword');
        } else {
            $post = $this->input->post();
            
            $data = array(
                'password' => $post['password baru']
            );

            $this->m_user->editPassword($email, $data, 'pemilik_hewan');

        }
    }
}
