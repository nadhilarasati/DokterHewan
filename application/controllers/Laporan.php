<?php defined('BASEPATH') or exit('No direct script access allowed');

// Class untuk membuat laporan

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("m_laporan");
        $this->load->library('pdf');
    }

    /*
    * LAPORAN
    */
    public function laporan()
    {
        $data['title'] = 'Laporan';
        $data['laporan'] = $this->m_laporan->getListLaporan();
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/laporan/v_listLaporan');
        $this->load->view('admin/template/sidebarfooter');
    }

    public function detailLaporan($jenis, $tanggal)
    {
        $data['title'] = 'Detail Laporan';
        $data['detail'] = $this->m_laporan->detail($jenis, $tanggal);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/laporan/v_detailLaporan', $data);
        $this->load->view('admin/template/sidebarfooter');
    }

    function laporanTanggal()
    {

        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 25, 'REKAP LAPORAN KUNJUNGAN KLINIK NYANKO', 0, 1, 'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 15, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(80, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jenis Hewan', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jumlah Kunjungan', 1, 1, 'C');
        $laporan = $this->m_laporan->getTanggal();

        foreach ($laporan as $l) {
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(80, 6, $l->tanggal, 1, 0, 'C');
            $pdf->Cell(55, 6, $l->jenis, 1, 0, 'C');
            $pdf->Cell(55, 6, $l->Jumlah, 1, 1, 'C');

        }

        $pdf->Output();
    }


    //cetak formulir

    function formulirRegistrasi()
    {

        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(195, 20, 'FORMULIR PENDAFTARAN PASIEN KLINIK NYANKO', 0, 1, 'C');
        //bawahnya
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 0, 'Bukit Cimanggu City R2 no. 7, Tanah Sareal, Bogor', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 15, '(0251) 7540402', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 5, '', 0, 1);
        //isi formulir data pemilik
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(195, 20, 'DATA PEMILIK HEWAN', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'No. KTP                            :         ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Nama Pemilik Hewan       :         ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Alamat                              :         ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Telepon                            :         ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Email                                :         ...................................', 0, 1, 'L');
        //isi formulir data pemilik
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(195, 20, 'DATA HEWAN PELIHARAAN', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Nama Hewan                    :        ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Jenis Hewan                     :        ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Jenis Kelamin                   :        ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Tanggal Lahir                   :         ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Ras                                   :        ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Warna                               :        ...................................', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 55, 'Bogor, ......', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 20, '(Pemilik Hewan)', 0, 1, 'L');

        $pdf->Output();
    }

    function laporanKunjungan()
    {

        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 25, 'REKAP LAPORAN KUNJUNGAN KLINIK NYANKO', 0, 1, 'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 15, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(80, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jenis Hewan', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jumlah Kunjungan', 1, 1, 'C');
        $laporan = $this->m_laporan->getListLaporan();

        foreach ($laporan as $l) {
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(80, 6, $l->tanggal, 1, 0, 'C');
            $pdf->Cell(55, 6, $l->jenis, 1, 0, 'C');
            $pdf->Cell(55, 6, $l->Jumlah, 1, 1, 'C');

        }

        $pdf->Output();
    }
}
