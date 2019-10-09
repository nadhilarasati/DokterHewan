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

        $this->load->view('admin/login/v_loginAdmin');

    }

    /*
    * REKAM MEDIS
    */
    public function rekamMedis()
    {
        $data['title'] = 'Rekam Medis';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/rekammedis/v_listRekamMedis');
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
        $this->load->view('admin/rekammedis/detail/v_detailRekamMedis');
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
        $this->load->view('admin/datapegawai/form/v_regPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function detailDataPegawai($idPegawai=null)
    {
        $datapegawai = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($datapegawai->rules_pegawai());
        
        if ($validation->run()) {
			$datapegawai->editPegawai($idPegawai);
			$this->session->set_flashdata('success', 'Berhasil diperbaharui');
        }

        $data['title'] = 'Detail Data Pegawai';
        $data["data_pegawai"] = $this->m_admin->getPegawaiById($idPegawai);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/detail/v_detailPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function dataPegawai()
    {
        $data['title'] = 'Data Pegawai';
        $data['daftar_pegawai'] = $this->m_admin->getPegawai();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/v_listPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function editDataPegawai($idPegawai=null){
        $datapegawai = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($datapegawai->rules_pegawai());
        
        if ($validation->run()) {
			$datapegawai->editPegawai($idPegawai);
			$this->session->set_flashdata('success', 'Berhasil diperbaharui');
			//redirect(site_url('admin/pariwisata/info/'.$fk));
        }
        
        

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
        $this->load->view('admin/datapasien/form/v_regPasien');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function dataPasien()
    {
        $data['title'] = 'Data Pasien';
        $data['daftar_pemilik'] = $this->m_admin->getPemilikHewan();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/v_listPasien');
        $this->load->view('admin/template/sidebarfooter');
    }


    public function detailDataPasien($idPemilik=null)
    {
        $data['title'] = 'Data Pasien';
        //nampilin data pemilik
        $result = $this->m_admin->getPemilikById($idPemilik);
		$data["data_pemilik"] = $result;
        
        //data hewan
        $result = $this->m_admin->getHewanById($idPemilik);
        $data["data_hewan"] = $result;
        
        //tipe hewan
        $result = $this->m_admin->getTipeHewan();
        $data["tipe_hewan"] = $result;
        
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/detail/v_detailPasien');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function formDataHewan($fk){
        $data['title'] = 'Data Pasien';
        $formhewan = $this->m_admin;
		$validation = $this->form_validation;
		$validation->set_rules($formhewan->rules_hewan());

		if ($validation->run()) {
			$formhewan->saveHewan($fk);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            //redirect(base_url());
        }

        redirect('admin/detailDataPasien/'.$fk);
        
        // $this->load->view('admin/template/sidebar', $data);
        // $this->load->view('admin/dataPasien/detail/v_detailPasien');
        // $this->load->view('admin/template/sidebarfooter');
    }

    /*
    * LAPORAN
    */
    public function laporan()
    {
        $data['title'] = 'Laporan';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/laporan/v_listLaporan');
        $this->load->view('admin/template/sidebarfooter');

    }

}

