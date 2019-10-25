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
				// 'nama' => $email,
                'logged_in' => TRUE
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/dataPasien"));
 
		}else{
            $this->session->set_flashdata('wrong', 'Password salah!');
            redirect(base_url('login'));
		}
    }

    private function setLogoutSession(){
        $this->session->unset_userdata('logged_in');
      }
    
    function logout(){
		$this->setLogoutSession();
		redirect(base_url('login'));
	}
}
