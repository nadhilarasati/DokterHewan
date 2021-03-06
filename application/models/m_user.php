<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model
{
    public function getIdByEmail($email)
    {
        $this->db->select('idPemilik');
        $this->db->from('pemilik_hewan');
        $this->db->where('email', $email);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getPemilikById($idPemilik)
    {
        $this->db->where('email', $idPemilik);
        return $this->db->get('pemilik_hewan')->row();
    }

    public function getHewanById($idHewan)
    {
        $this->db->where('idPemilik', $this->getIdByEmail($idHewan)->idPemilik);
        return $this->db->get('daftar_hewan')->result();
    }

    public function editPassword($idPemilik)
    {
        $post = $this->input->post();
        $this->password = $post["passBaru"];
        $this->db->where('email', $idPemilik);
        return $this->db->update("pemilik_hewan", $this);
    }

}
