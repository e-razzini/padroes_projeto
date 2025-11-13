<?php 
include_once __DIR__.'/PagamentoMercadoPago.class.php';
include_once __DIR__.'/PagamentoDHL.class.php';
include_once __DIR__.'/pagamentoInterface.interface.php';
class PaymentFactory {

    public static function createPaymentMethod(string $method) :PagamentoInterface  {

        if($method=="DHL"){
           return new PagamentoDHL();
        }
        if($method=="MercadoPago"){
            return new PagamentoMercadoPago();
        }
        throw new Exception("Metodo de pagamento nao disponivel");
    }
}

?>