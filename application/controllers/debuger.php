<?php

class debuger extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->library('form_validation');
    }

    public function dbg($idPemilik=1)
    {
        // $data['title'] = 'Profile';
        $data_pemilik = $this->m_user->getPemilikById($idPemilik);
        print_r($data_pemilik);
    }
}