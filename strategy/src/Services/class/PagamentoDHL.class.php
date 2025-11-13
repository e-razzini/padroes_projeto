<?php 
include_once __DIR__.'/../libs_payment/Dhl.class.php';
include_once __DIR__.'/pagamentoInterface.interface.php';
// Implementa a interface de pagamento para garantir que o método processPaymentKg seja definido
class PagamentoDHL  implements PagamentoInterface {
 
    public function processPaymentKg($peso) {
       
        $DHL = new Dhl();
        return $DHL->processPayment($peso);
    }
     
}

?>