<?php
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    function index(){
		$this->load->view('admin/login/v_loginAdmin');
	}

    function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("staff_klinik",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/dataPasien"));
 
		}else{
			echo "Username dan Password Salah!";
		}
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
