<?php
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('admin/login/v_loginAdmin');
    }

    function loginAuth()
    {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->m_login->validate($email, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $name  = $data['namaPegawai'];
            $email = $data['email'];
            $role = $data['role'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'role'     => $role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for paramedis
            if ($role === '1') {
                redirect('dokter/listRekamMedis');

                // access login for dokter
            } elseif ($role === '2') {
                redirect('admin/dataPasien');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
