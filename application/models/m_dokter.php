<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model{
    
    public function getHewanById($idHewan){
        //$this->db->where('idHewan', $idHewan);
        return $this->db->get("daftar_hewan")->row();
    }

    public function getHewan()
    {
        return $this->db->get('daftar_hewan')->result();
    }

    public function getRekamMedis($idRekamMedis){
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("rekam_medis")->result();
    }

    // public function getPemilik(){
    //     return $this->db->get("pemilik_peliharaan")->result();
    // }
}