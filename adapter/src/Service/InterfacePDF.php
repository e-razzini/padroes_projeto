<?php 

namespace App\Service;


interface InterfacePDF {
    public function generate($htmlContent, $paperSize = 'A4', $orientation = 'portrait');
}

?>