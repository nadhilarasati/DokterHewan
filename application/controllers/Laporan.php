<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Class untuk membuat laporan

class Laporan extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    
    function penerima_bantuan(){
        $dompdf = new DOMPDF();
        $dompdf->AddPage();
        $dompdf->SetFont('Arial','B',16);
        $dompdf->Cell(40,10,'Hello World!');
        $dompdf->Output();
    }
}