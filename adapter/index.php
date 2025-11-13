<?php 
define('BASE_DIR', __DIR__ .'/vendor/autoload.php');
require_once BASE_DIR;

use App\Service\DomPdfAdapter;
use App\Service\GenerateReportPdf;
use App\Service\TcPDFdapter;

//$pdfAdapter  = new DomPdfAdapter();
$pdfAdapter  = new TcPDFdapter();
$htmlContent = '<h1>Relatório de Vendas</h1><p>Este é um relatório de vendas gerado em PDF.</p>';
$reportGenerator = new GenerateReportPdf($pdfAdapter);
$reportGenerator->generate_report_pdf($htmlContent);   

?>