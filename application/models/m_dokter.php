<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model{
    
    public function getHewan(){
        return $this->db->get("daftar_hewan")->result();
    }

    // public function getHewanById($idHewan)
    // {
    //     $this->db->where('idPemilik', $idHewan);
    //     return $this->db->get('daftar_hewan')->result();
    // }

    public function getRekamMedis($idRekamMedis){
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("rekam_medis")->result();
    }
}