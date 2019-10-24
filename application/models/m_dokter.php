<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model{
    
    public function getHewanById($idHewan){
        //$this->db->where('idHewan', $idHewan);
        return $this->db->get("daftar_hewan")->row();
    }

    public function getAntrian()
    {
        return $this->db->get('list_antrian')->result();
    }

    public function getRekamMedis($idRekamMedis){
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("rekam_medis")->result();
    }
}