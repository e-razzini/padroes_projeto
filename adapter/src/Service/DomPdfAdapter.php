<?php 

namespace App\Service;


use Dompdf\Dompdf;
use Dompdf\Options;


class DomPdfAdapter implements InterfacePDF 
{

    private $dompdf;
    
    public function generate($htmlContent, $paperSize = 'A4', $orientation = 'portrait') {
        
        $this->dompdf = new Dompdf();
        $this->dompdf->loadHtml($htmlContent);
        $this->dompdf->setPaper($paperSize, $orientation);
        $this->dompdf->render();
        $output = $this->dompdf->output();

        $filename = "DomPDF-".date('Y-m-d-H-i-s') . '-report.pdf';
        file_put_contents($filename, $output);
    }

}


?>