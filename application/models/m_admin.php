<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

    /*
	* Method untuk menentukan aturan input form
	*/
    public function rules_pegawai()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],


            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'telepon',
                'label' => 'Telepon',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required'
            ]
        ];
    }

    public function rules_pasien()
    {
        return [
            [
                'field' => 'noKTP',
                'label' => 'noKTP',
                'rules' => 'required'
            ],
            [
                'field' => 'namaPemilik',
                'label' => 'namaPemilik',
                'rules' => 'required'
            ],


            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'telepon',
                'label' => 'Telepon',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            /*[
                'field' => 'jenis hewan',
                'label' => 'Jenis Hewan',
                'rules' => 'required'
            ],*/

            [
                'field' => 'namaHewan',
                'label' => 'namaHewan',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggalLahir',
                'label' => 'tanggalLahir',
                'rules' => 'required'
            ],

            [
                'field' => 'jenisKelamin',
                'label' => 'jenisKelamin',
                'rules' => 'required'
            ],

            [
                'field' => 'ras',
                'label' => 'ras',
                'rules' => 'required'
            ],

            [
                'field' => 'warna',
                'label' => 'warna',
                'rules' => 'required'
            ]
        ];
    }

    /*
	* Method untuk mendapatkan seluruh data staff klinik
	*/
    public function getPegawai()
    {
        return $this->db->get("staff_klinik")->result();
    }

    public function savePegawai()
    {
        $post = $this->input->post();
        //$this->id_berita = uniqid();
        //this->[nama kolom]= post[name di input html];
        $this->namaPegawai = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->role = $post["role"];

        return $this->db->insert("staff_klinik", $this);
    }

    public function getPegawaiById($idPegawai)
    {
        $this->db->where('idPegawai', $idPegawai);
        return $this->db->get('staff_klinik')->row();
    }

    /*
	* Method untuk mendapatkan seluruh data pemilik hewan
	*/
    public function getPemilikHewan()
    {
        return $this->db->get("pemilik_hewan")->result();
    }

    public function savePasien()
    {
        $post = $this->input->post();
        
        $data= array(
            'noKTP' => $post['noKTP'],
            'namaPemilik' => $post['namaPemilik'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'email' => $post['email'],
            'password' => $post['password']
            
        );

        $dataHewan= array (
            'namaHewan' => $post['namaHewan'],
            'tanggalLahir' => $post['tanggalLahir'],
            'jenisKelamin' => $post['jenisKelamin'],
            'ras' => $post['ras'],
            'warna' => $post['warna']
        );

        $this->db->insert("pemilik_hewan", $data);
        $this->db->insert("hewan_peliharaan", $dataHewan);
    }

    public function getPemilikById($idPemilik)
    {
        $this->db->where('idPemilik', $idPemilik);
        return $this->db->get('pemilik_hewan')->row();
    }

    public function getHewanById($idHewan)
    {
        $this->db->where('idHewan', $idHewan);
        return $this->db->get('hewan_peliharaan')->result();
    }
}
