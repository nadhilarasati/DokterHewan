<?php

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_dokter");
    }
    /*
    * REKAM MEDIS DOKTER
    */

    //lihat rekam medis

    public function listRekamMedis()
    {

        $data['title'] = 'Rekam Medis';
        $data["data_antrian"] = $this->m_dokter->getAntrian($this->session->userdata('email'));
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('dokter/rekammedis/v_listRekamMedis');
        $this->load->view('admin/template/sidebarfooter');
    }

    //lihat detail rekam medis
    public function detailMedis($idHewan = null)
    {

        $data['title'] = 'Rekam Medis';
        $data["data_pet"] = $this->m_dokter->getHewanById($idHewan);
        $data["data_medis"] = $this->m_dokter->getRekamMedis($idHewan);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('dokter/rekammedis/detail/v_detailMedis');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function hapusAntrian($idAntrian=null){
        $this->m_dokter->hapus($idAntrian);
        redirect('dokter/listRekamMedis');
    }

    public function profilDokter()
    {

        $data['title'] = 'Profil Dokter';
        $data["profil_dokter"] = $this->m_dokter->getDokterById($this->session->userdata('email'));
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('dokter/v_profil');
        $this->load->view('admin/template/sidebarfooter');
    }
}
