<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model{
    
    public function getHewanById($idHewan){
        $this->db->where('idHewan', $idHewan);
        return $this->db->get("daftar_hewan")->row();
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

    public function getRekamMedis($idRekamMedis){
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("data_medis_view")->result();
    }

    public function hapus($idAntrian){
        return $this->db->delete("antrian_registrasi", ["idAntrian" => $idAntrian]);
    }
}