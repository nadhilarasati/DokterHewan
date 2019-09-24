<?php

class Admin extends CI_Controller{


    public function __construct() {
		parent::__construct();
        $this->load->model("m_admin");
        $this->load->library('form_validation');


		//If not login, cannot access this.
		// $data = $this->session->has_userdata('logged_in');
		// if(!$data){
		// 	redirect('admin');
		// }
	}

    public function loginAdmin()
    {
        $data['title'] = 'Login Admin';

        $this->load->view('admin/login/index');

    }

    /*
    * REKAM MEDIS
    */
    public function rekamMedis()
    {
        $data['title'] = 'Rekam Medis';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/rekammedis/index');
        $this->load->view('admin/template/sidebarfooter');

    }

    public function formRekamMedis()
    {
        $data['title'] = 'Form Rekam Medis';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/rekammedis/form/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function detailRekamMedis()
    {
        $data['title'] = 'Detail Rekam Medis';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/rekammedis/detail/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    /*
    * DATA PEGAWAI
    */
    public function formDataPegawai(){
        $formpegawai = $this->m_admin;
		$validation = $this->form_validation;
		$validation->set_rules($formpegawai->rules_pegawai());

		if ($validation->run()) {
			$formpegawai->savePegawai();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

        $data['title'] = 'Form Data Pegawai';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/datapegawai/form/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function detailDataPegawai($idPegawai=null)
    {
        
        $data['title'] = 'Detail Data Pegawai';
        $data["data_pegawai"] = $this->m_admin->getPegawaiById($idPegawai);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/detail/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function dataPegawai()
    {
        $data['title'] = 'Data Pegawai';
        $data['daftar_pegawai'] = $this->m_admin->getPegawai();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    /*
    * DATA PASIEN
    */
    public function formDataPasien()
    {
        $formpasien = $this->m_admin;
		$validation = $this->form_validation;
		$validation->set_rules($formpasien->rules_pasien());

		if ($validation->run()) {
			$formpasien->savePasien();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
        $data['title'] = 'Form Data Pasien';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/datapasien/form/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function dataPasien()
    {
        $data['title'] = 'Data Pasien';
        $data['daftar_pemilik'] = $this->m_admin->getPemilikHewan();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/index');
        $this->load->view('admin/template/sidebarfooter');
    }


    public function detailDataPasien()
    {
        $data['title'] = 'Data Pasien';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/detail/index');
        $this->load->view('admin/template/sidebarfooter');
    }

    /*
    * LAPORAN
    */
    public function laporan()
    {
        $data['title'] = 'Laporan';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/laporan/index');
        $this->load->view('admin/template/sidebarfooter');

    }

}

