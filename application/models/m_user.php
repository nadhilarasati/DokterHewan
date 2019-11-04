<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model{
    public function getIdByEmail($email){
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

    public function getHewan($idHewan)
    {
        $this->db->where('idHewan', $idHewan);
        return $this->db->get("daftar_hewan")->row();
    }

    public function getRekamMedis($idRekamMedis)
    {
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("rekam_medis")->result();
    }

    public function editPassword($idPemilik)
    {
        $post = $this->input->post();

        $this->password = $post["password"];
        $this->db->where('idPemilik', $idPemilik);
        return $this->db->update("pemilik_hewan", $this);
    }

    //upload foto
    private function uploadFotoPariwisata($id){
		$currName = $this->nama;
		$new_name = $id." ".$currName;

		$config['upload_path']	= './img/Pariwisata/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['file_name']		= $new_name;
		$config['overwrite']		= true;
		$config['max_size']			= 1024; // 1MB
		

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name"); //nama file + jpg nya
		}else{
			return "default.jpg";
		}
	}

}