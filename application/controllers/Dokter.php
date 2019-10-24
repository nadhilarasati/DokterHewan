<?php

class Dokter extends CI_Controller{
    public function __construct() {
		parent::__construct();
        $this->load->model("m_dokter");
        $this->load->library('form_validation');


		//If not login, cannot access this.
		// $data = $this->session->has_userdata('logged_in');
		// if(!$data){
		// 	redirect('admin');
		// }
	}
    /*
    * REKAM MEDIS DOKTER
    */

    //lihat rekam medis
    public function listRekamMedis()
    {
        
        $data['title'] = 'Rekam Medis';
        $data["data_antrian"] = $this->m_dokter->getAntrian();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('dokter/rekammedis/v_listRekamMedis');
        $this->load->view('admin/template/sidebarfooter');
    }

    //lihat detail rekam medis
    public function detailMedis($idHewan=null)
    {
        
        $data['title'] = 'Rekam Medis';
        //$data["data_owner"] = $this->m_dokter->getPemilik($idHewan);
        $data["data_pet"] = $this->m_dokter->getHewanById($idHewan);
        $data["data_medis"] = $this->m_dokter->getRekamMedis($idHewan);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('dokter/rekammedis/detail/v_detailMedis');
        $this->load->view('admin/template/sidebarfooter');
    }
}