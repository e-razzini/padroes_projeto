<?php 
include_once __DIR__.'/../libs_payment/Mercadopago.class.php';
include_once __DIR__.'/pagamentoInterface.interface.php';

// Implementa a interface de pagamento para garantir que o método processPaymentKg seja definido
class PagamentoMercadoPago  implements PagamentoInterface {
 
    public function processPaymentKg($valor) {
        $mercadoPago = new Mercadopago();    
        return $mercadoPago->processPayment($valor);
    }
    public function processItem() {}
     
}



?>