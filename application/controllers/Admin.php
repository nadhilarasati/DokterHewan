<?php

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_admin");
        $this->load->library('form_validation');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function loginAdmin()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('admin/login/v_loginAdmin');
    }




    /*
    * REKAM MEDIS
    */

    //lihat detail rekam medis
    public function detailRekamMedis($idHewan = null)
    {

        $data['title'] = 'Detail Rekam Medis';
        $data["data_pet"] = $this->m_admin->getHewan($idHewan);
        $data["data_medis"] = $this->m_admin->getRekamMedis($idHewan);
        $data["dokter_praktek"] = $this->m_admin->getDokter();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/rekammedis/detail/v_detailRekamMedis');
        $this->load->view('admin/template/sidebarfooter');
    }

    //insert rekam medis
    public function formRekamMedis($fk)
    {
        $data['title'] = 'Data Pasien';
        $formmedis = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($formmedis->rules_rekammedis());

        if ($validation->run()) {
            $formmedis->buatRekamMedis($fk);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            //redirect(base_url());
        }

        redirect('admin/detailRekamMedis/' . $fk);
    }

    public function formKirim($fk)
    {
        $formmedis = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules('idPegawai', 'idPegawai','required');

        if ($validation->run()) {
            $formmedis->kirim($fk);
            $this->session->set_flashdata('success', 'Berhasil di kirim');
            //redirect(base_url());
        }

        redirect('admin/detailRekamMedis/' . $fk);
    }


    /*
    * DATA PEGAWAI
    */

    //create akun pegawai baru
    public function formDataPegawai()
    {
        $formpegawai = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($formpegawai->rules_pegawai());

        if ($validation->run()) {
            $formpegawai->savePegawai();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dataPegawai'));
        }
        $data['title'] = 'Form Data Pegawai';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/datapegawai/form/v_regPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }

    //read detail data pegawai & edit data pegawai
    public function detailDataPegawai($idPegawai = null)
    {
        $datapegawai = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($datapegawai->rules_pegawai());

        if ($validation->run()) {
            $datapegawai->editPegawai($idPegawai);
            $this->session->set_flashdata('success', 'Berhasil diperbarui');
        }

        $data['title'] = 'Detail Data Pegawai';
        $data["data_pegawai"] = $this->m_admin->getPegawaiById($idPegawai);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/detail/v_detailPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }

    //nampilin list pegawai
    public function dataPegawai()
    {
        $data['title'] = 'Data Pegawai';
        $data['daftar_pegawai'] = $this->m_admin->getPegawai();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPegawai/v_listPegawai');
        $this->load->view('admin/template/sidebarfooter');
    }




    // }

    /*
    * DATA PASIEN
    */

    //create akun pemilik hewan
    public function formDataPasien()
    {
        $formpasien = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($formpasien->rules_pasien());

        if ($validation->run()) {
            $formpasien->savePasien();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dataPasien'));
        }
        $data['title'] = 'Form Data Pasien';
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/datapasien/form/v_regPasien');
        $this->load->view('admin/template/sidebarfooter');
    }

    //nampilin list pemilik hewan
    public function dataPasien()
    {
        $data['title'] = 'Data Pasien';
        $data['daftar_pemilik'] = $this->m_admin->getPemilikHewan();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/v_listPasien');
        $this->load->view('admin/template/sidebarfooter');
    }


    //read data pemilik hewan & hewan peliharaan
    public function detailDataPasien($idPemilik = null)
    {

        $datapemilik = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($datapemilik->rules_pasien());

        if ($validation->run()) {
            $datapemilik->editPemilikHewan($idPemilik);
            $this->session->set_flashdata('success', 'Berhasil diperbarui');
        }

        $data['title'] = 'Data Pasien';
        //nampilin data pemilik
        $data["data_pemilik"] = $this->m_admin->getPemilikById($idPemilik);

        //data hewan
        $data["data_hewan"] = $this->m_admin->getHewanById($idPemilik);

        //tipe hewan
        $data["tipe_hewan"] = $this->m_admin->getTipeHewan();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/dataPasien/detail/v_detailPasien');
        $this->load->view('admin/template/sidebarfooter');
    }

    //nambahin hewan peliharaan di dalam data pemilik hewan
    public function formDataHewan($fk)
    {
        $data['title'] = 'Data Pasien';
        $formhewan = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($formhewan->rules_hewan());

        if ($validation->run()) {
            $formhewan->saveHewan($fk);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            //redirect(base_url());
        }

        redirect('admin/detailDataPasien/' . $fk);

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
