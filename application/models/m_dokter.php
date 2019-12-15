<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model{
    
    public function getHewanById($idHewan){
        $this->db->where('idHewan', $idHewan);
        return $this->db->get("pemilik_peliharaan")->row();
    }

    public function getIdByEmail($email){
        $this->db->select('idPegawai');
        $this->db->from('staff_klinik');
        $this->db->where('email', $email);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getAntrian($email)
    {
        $idPegawai = $this->getIdByEmail($email)->idPegawai;
        return $this->db->get_where('list_antrian',["idPegawai" => $idPegawai])->result();
    }

    public function getDokterById($idPegawai)
    {
        $this->db->where('email', $idPegawai);
        return $this->db->get('staff_klinik')->row();
    }

}