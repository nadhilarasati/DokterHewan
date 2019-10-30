<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model{
    
    public function getPemilikById($idPemilik)
    {
        $this->db->where('idPemilik', $idPemilik);
        return $this->db->get('pemilik_hewan')->row();
    }
}