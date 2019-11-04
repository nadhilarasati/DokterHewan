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

    public function seeDetail($idHewan = null)
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
        $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required');
        $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[12]|matches[passKonf]');
        $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[12]|matches[passBaru]');

        $email = $this->session->userdata('email');
        if ($this->form_validation->run() == true) {
            if (password_verify($this->input->post('passLama'), $this->session->userdata('password'))) {
                if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
                    $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                    redirect('UserProfile/seeProfile');
                } else {
                    $data = ['password' => $this->input->post('passBaru')];
                    $result = $this->m_user->editPassword($email);
                    if ($result > 0) {
                        $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
                        redirect('UserProfile/seeProfile');
                    } else {
                        $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
                        redirect('UserProfile/seeProfile');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
                redirect('UserProfile/seeProfile');
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            redirect('UserProfile/seeProfile');
        }
    }
}
