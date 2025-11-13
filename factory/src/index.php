<?php 
include_once 'Services/Pagamento.context.class.php';
include_once 'Services/class/PagamentoMercadoPago.class.php';
include_once 'Services/class/PagamentoDHL.class.php';
include_once 'Services/class/Payment.factory.php';

$mercadoPago      =  PaymentFactory::createPaymentMethod("DHL");
$pagamentoGateway = new PagamentoContext($mercadoPago);
$result           = $pagamentoGateway->executePayment(100);
echo $result;
?>