<?php 

namespace App\Service;
    

class GenerateReportPdf 
{

    private $dompdf;

    public function __construct(private InterfacePDF $pdfAdapter) {}
    
    public function generate_report_pdf($htmlContent, $paperSize = 'A4', $orientation = 'portrait') {
        $filename =date('Y-m-d-H-i-s') . '-report.pdf';
        $this->pdfAdapter->generate($htmlContent, $paperSize, $orientation);
    }

}

?>