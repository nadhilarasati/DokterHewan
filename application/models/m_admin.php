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

    public function editPegawai($idPegawai){
        $post = $this->input->post();

		$this->namaPegawai = $post["nama"];
		$this->alamat = $post["alamat"];
		$this->telepon = $post["telepon"];
        $this->role = $post["role"];
        $this->email = $post["email"];
		$this->password = $post["password"];

		

		$this->db->where('idPegawai',$idPegawai);
		return $this->db->update("staff_klinik", $this);
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

        $data = array(
            'noKTP' => $post['noKTP'],
            'namaPemilik' => $post['namaPemilik'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'email' => $post['email'],
            'password' => $post['password']

        );

        // $dataHewan = array(
        //     'namaHewan' => $post['namaHewan'],
        //     'tanggalLahir' => $post['tanggalLahir'],
        //     'jenisKelamin' => $post['jenisKelamin'],
        //     'ras' => $post['ras'],
        //     'warna' => $post['warna']
        // );

        $this->db->insert("pemilik_hewan", $data);
        //$this->db->insert("hewan_peliharaan", $dataHewan);
    }

    public function saveHewan($fk){
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

    public function getPemilikById($idPemilik)
    {
        $this->db->where('idPemilik', $idPemilik);
        return $this->db->get('pemilik_hewan')->row();
    }

    public function getHewanById($idHewan)
    {
        $this->db->where('idPemilik', $idHewan);
        return $this->db->get('daftar_hewan')->result();
    }

    public function getTipeHewan(){
        return $this->db->get('jenis_hewan')->result();
    }

    public function editPemilikHewan($idPemilik){
        $post = $this->input->post();

        $this->noKTP = $post["noKTP"];
		$this->namaPemilik = $post["namaPemilik"];
		$this->alamat = $post["alamat"];
		$this->telepon = $post["telepon"];
        $this->email = $post["email"];
		$this->password = $post["password"];


		$this->db->where('idPemilik',$idPemilik);
		return $this->db->update("pemilik_hewan", $this);
    }
}
