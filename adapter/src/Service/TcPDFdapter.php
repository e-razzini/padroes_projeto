<?php 
namespace App\Service;

use TCPDF;

class TcPDFdapter implements InterfacePDF 
{
    private $tcpdf;
    
    public function generate($htmlContent, $paperSize = 'A4', $orientation = 'portrait') {
        
        $this->tcpdf = new TCPDF();
        $this->tcpdf->AddPage();
        $this->tcpdf->SetFont('helvetica', '', 12);
        $this->tcpdf->Write(0,$htmlContent);

        $filename =__DIR__. "/../../tcPDF-".date('Y-m-d-H-i-s') . '-report.pdf';
        $this->tcpdf->Output($filename, 'F');
    }

}

?>