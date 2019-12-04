<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

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
            ]
        ];
    }



    public function rules_hewan()
    {
        return [
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
            ],

            [
                'field' => 'jenisHewan',
                'label' => 'jenisHewan',
                'rules' => 'required'
            ]
        ];
    }

    public function rules_edithewan()
    {
        return [
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
            ],

            [
                'field' => 'jenisHewan',
                'label' => 'jenisHewan',
                'rules' => 'required'
            ],

            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ]
        ];
    }


    public function rules_rekammedis()
    {
        return [
            [
                'field' => 'gejalaKlinis',
                'label' => 'gejalaKlinis',
                'rules' => 'required'
            ],

            [
                'field' => 'suhuBadan',
                'label' => 'suhuBadan',
                'rules' => 'required'
            ],

            [
                'field' => 'beratBadan',
                'label' => 'beratBadan',
                'rules' => 'required'
            ],

            [
                'field' => 'diagnosa',
                'label' => 'diagnosa',
                'rules' => 'required'
            ],

            [
                'field' => 'terapi',
                'label' => 'terapi',
                'rules' => 'required'
            ]
        ];
    }

    //DATA PEGAWAI

    /*
	* Method untuk mendapatkan seluruh data staff klinik
	*/
    public function getPegawai()
    {
        return $this->db->get("staff_klinik")->result();
    }

    /*
	* Method untuk create data pegawai baru
	*/
    public function savePegawai()
    {
        $post = $this->input->post();
        
        $this->namaPegawai = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->role = $post["role"];

        return $this->db->insert("staff_klinik", $this);
    }


    /*
	* Method untuk menampilkan data dari seorang pegawai
	*/
    public function getPegawaiById($idPegawai)
    {
        $this->db->where('idPegawai', $idPegawai);
        return $this->db->get('staff_klinik')->row();
    }

    /*
	* Method untuk edit data pegawai
	*/
    public function editPegawai($idPegawai)
    {
        $post = $this->input->post();

        $this->namaPegawai = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->role = $post["role"];
        $this->email = $post["email"];
        $this->password = $post["password"];



        $this->db->where('idPegawai', $idPegawai);
        return $this->db->update("staff_klinik", $this);
    }

    //DATA PASIEN

    /*
	* Method untuk mendapatkan seluruh data pemilik hewan
	*/
    public function getPemilikHewan()
    {
        return $this->db->get("pemilik_hewan")->result();
    }

    /*
	* Method untuk create data pemilik hewan baru
	*/
    public function savePasien()
    {
        $post = $this->input->post();

        $data = array(
            'noKTP' => $post['noKTP'],
            'namaPemilik' => $post['namaPemilik'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'email' => $post['email'],
            'password' => $post['password']

        );

        $this->db->insert("pemilik_hewan", $data);
    }

    /*
	* Method untuk menambahkan data hewan peliharaan
	*/
    public function saveHewan($fk)
    {
        $post = $this->input->post();

        $this->namaHewan = $post["namaHewan"];
        $this->tanggalLahir = $post["tanggalLahir"];
        $this->jenisKelamin = $post["jenisKelamin"];
        $this->ras = $post["ras"];
        $this->warna = $post["warna"];
        $this->idTipe = $post["jenisHewan"];

        $this->idPemilik = $fk;
        $this->db->insert("hewan_peliharaan", $this);
    }

    /*
	* Method untuk menampilkan data seorang pemilik hewan
	*/
    public function getPemilikById($idPemilik)
    {
        $this->db->where('idPemilik', $idPemilik);
        return $this->db->get('pemilik_hewan')->row();
    }

    /*
	* Method untuk menampilkan hewan peliharaan
	*/
    public function getHewanById($idHewan)
    {
        $this->db->where('idPemilik', $idHewan);
        return $this->db->get('daftar_hewan')->result();
    }

    /*
	* Method untuk mendapatkan suatu jenis hewan
	*/
    public function getTipeHewan()
    {
        return $this->db->get('jenis_hewan')->result();
    }

    /*
	* Method untuk edit data pemilik hewan
	*/
    public function editPemilikHewan($idPemilik)
    {
        $post = $this->input->post();

        $this->noKTP = $post["noKTP"];
        $this->namaPemilik = $post["namaPemilik"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->email = $post["email"];
        $this->password = $post["password"];


        $this->db->where('idPemilik', $idPemilik);
        return $this->db->update("pemilik_hewan", $this);
    }

    /*
	* Method untuk menampilkan hewan peliharaan
	*/
    public function getHewan($idHewan)
    {
        $this->db->where('idHewan', $idHewan);
        return $this->db->get("daftar_hewan")->row();
    }

    //REKAM MEDIS

    /*
	* Method untuk insert rekam medis
	*/
    public function buatRekamMedis($fk)
    {
        $post = $this->input->post();

        $this->tanggal = date("Y/m/d");
        $this->gejalaKlinis = $post["gejalaKlinis"];
        $this->suhuBadan = $post["suhuBadan"];
        $this->beratBadan = $post["beratBadan"];
        $this->diagnosa = $post["diagnosa"];
        $this->terapi = $post["terapi"];
        $this->idPegawai = $post["idPegawai"];

        $this->idHewan = $fk;
        $this->db->insert("rekam_medis", $this);
    }

    /*
	* Method untuk menampilkan rekam medis
	*/
    public function getRekamMedis($idRekamMedis)
    {
        $this->db->where('idHewan', $idRekamMedis);
        return $this->db->get("data_medis_view")->result();
    }

    public function getMedis($idRekamMedis)
    {
        $this->db->where('idRekamMedis', $idRekamMedis);
        return $this->db->get("data_medis_view")->row();
    }

    public function getDokter()
    {
        $this->db->select('idPegawai');
        $this->db->select('namaPegawai');
        $this->db->from('staff_klinik');
        $this->db->where('role', 1);
        $query = $this->db->get()->result();
        return $query;
    }

    public function kirim($idHewan)
    {
        $post = $this->input->post();
        $this->idPegawai = $post["idPegawai"];
        $this->idHewan = $idHewan;
        $this->db->insert("antrian_registrasi", $this);
    }

    public function editHewan($idHewan)
    {
        $post = $this->input->post();

        $this->namaHewan = $post["namaHewan"];
        $this->tanggalLahir = $post["tanggalLahir"];
        $this->jenisKelamin = $post["jenisKelamin"];
        $this->ras = $post["ras"];
        $this->warna = $post["warna"];
        $this->idTipe = $post["jenisHewan"];
        $this->status = $post["status"];
        
        $this->db->where('idHewan', $idHewan);
        return $this->db->update("hewan_peliharaan", $this);
    }

    //reset antrian
    public function resetQ()
    {
        $this->db->truncate("antrian_registrasi");
    }
}
