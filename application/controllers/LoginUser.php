<?php
class LoginUser extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('public/login/v_loginPublic');
    }

    function aksi_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("pemilik_hewan",$where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $email,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data_session);
            redirect(base_url("pages/index"));
        } else {
            $this->session->set_flashdata('wrong', 'Password salah!');
            redirect(base_url('pages/login'));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('pages/login'));
    }
}