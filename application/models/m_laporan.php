<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
    //laporan
    public function getListLaporan()
    {
        return $this->db->get("laporan_kunjungan_view")->result();
    }

    public function detail($jenis, $tanggal)
    {
        $this->db->where('jenis', $jenis);
        $this->db->where('tanggal', $tanggal);
        return $this->db->get("detail_laporan_view")->result();
    }
}
