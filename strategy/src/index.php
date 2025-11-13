<?php 
include_once 'Services/Pagamento.context.class.php';
include_once 'Services/class/PagamentoMercadoPago.class.php';
include_once 'Services/class/PagamentoDHL.class.php';
$mercadoPago = new PagamentoMercadoPago();
$DHL = new PagamentoDHL();

$pagamentoGateway = new PagamentoContext($mercadoPago);
$result           = $pagamentoGateway->executePayment(100);
echo $result;
?>