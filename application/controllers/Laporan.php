<?php defined('BASEPATH') or exit('No direct script access allowed');

// Class untuk membuat laporan

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("m_laporan");
        $this->load->model("m_admin");
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
        $data = $this->input->post();
        $awal = $data["tanggalAwal"];
        $akhir = $data["tanggalAkhir"];
        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 25, 'REKAP LAPORAN KUNJUNGAN KLINIK NYANKO', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 10, 'Periode '.$awal.' sampai '.$akhir, 0, 1, 'C');
        $pdf->Cell(10, 15, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(80, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jenis Hewan', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jumlah Kunjungan', 1, 1, 'C');
        
        $laporan = $this->m_laporan->getTanggal($awal,$akhir);

        $sebelum = $awal;
        $counter = 0;
        $subtotal = 0;
        $total = 0;
        foreach ($laporan as $l) {
            if($sebelum == $l->tanggal || $counter == 0){
                $pdf->SetFont('Arial', '', 10);
                $pdf->Cell(80, 6, $l->tanggal, 1, 0, 'C');
                $pdf->Cell(55, 6, $l->jenis, 1, 0, 'C');
                $pdf->Cell(55, 6, $l->Jumlah, 1, 1, 'C');
                $sebelum = $l->tanggal;
                $counter ='1';
                $subtotal += $l->Jumlah;
                $total += $l->Jumlah;
            }else{
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(80, 6,"" , 1, 0, 'C');
                $pdf->Cell(55, 6,'Subtotal' , 1, 0, 'C');
                $pdf->Cell(55, 6, $subtotal, 1, 1, 'C');
                $subtotal = 0;
                $pdf->SetFont('Arial', '', 10);
                $pdf->Cell(80, 6, $l->tanggal, 1, 0, 'C');
                $pdf->Cell(55, 6, $l->jenis, 1, 0, 'C');
                $pdf->Cell(55, 6, $l->Jumlah, 1, 1, 'C');
                $subtotal += $l->Jumlah;
                $sebelum = $l->tanggal;
                $total += $l->Jumlah;
            }     
        }
        $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(80, 6,"" , 1, 0, 'C');
                $pdf->Cell(55, 6,'Subtotal' , 1, 0, 'C');
                $pdf->Cell(55, 6, $subtotal, 1, 1, 'C');
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(80, 6,"" , 1, 0, 'C');
                $pdf->Cell(55, 6,'Total' , 1, 0, 'C');
                $pdf->Cell(55, 6, $total, 1, 1, 'C');

        $pdf->Output();
    }


    //cetak formulir

    function formulirRegistrasi()
    {

        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(195, 20, 'FORMULIR PENDAFTARAN PASIEN KLINIK NYANKO', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 0, 'Jalan Wira Angun-Angun no.16, Bandung', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 15, '(022) 3528145', 0, 1, 'C');
        $pdf->Cell(10, 5, '', 0, 1);
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
        $pdf->Cell(195, 55, 'Bandung, ......', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 20, '(Pemilik Hewan)', 0, 1, 'L');

        $pdf->Output();
    }

    function laporanKunjungan()
    {

        $pdf = new FPDF('p', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 25, 'REKAP LAPORAN KUNJUNGAN KLINIK NYANKO', 0, 1, 'C');

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

    function rekamMedisPDF($idHewan = null)
    {
        $hewan = $this->m_admin->getHewan($idHewan);

        $pdf = new FPDF('l', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 25, '                                                       FORM REKAM MEDIS KLINIK NYANKO', 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(10, 20, 'Data Hewan', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Nama Hewan         :       ' . $hewan->namaHewan . '', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Jenis Hewan          :       ' . $hewan->jenis . '', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Tanggal Lahir         :      ' . $hewan->tanggalLahir . '', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Jenis Kelamin        :       ' . $this->gender($hewan->jenisKelamin) . '', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Ras                        :       ' . $hewan->ras . '', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(195, 10, 'Warna                    :       ' . $hewan->warna . '', 0, 1, 'L');

        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(10, 20, 'Rekam Medis', 0, 1);
        $pdf->Cell(10, 5, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 6, 'Tanggal', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Gejala Klinis', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Suhu Badan', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Berat Badan', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Diagnosa', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Terapi', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TTD Dokter', 1, 1, 'C');
        $pdf->Cell(30, 30, '', 1, 0, 'C');
        $pdf->Cell(40, 30, '', 1, 0, 'C');
        $pdf->Cell(30, 30, '', 1, 0, 'C');
        $pdf->Cell(30, 30, '', 1, 0, 'C');
        $pdf->Cell(40, 30, '', 1, 0, 'C');
        $pdf->Cell(40, 30, '', 1, 0, 'C');
        $pdf->Cell(30, 30, '', 1, 1, 'C');

        $pdf->Output();
    }

    function gender($code)
    {
        if ($code == 1) {
            return "Betina";
        } else {
            return "Jantan";
        }
    }
}
