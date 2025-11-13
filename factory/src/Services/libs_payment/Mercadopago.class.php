<?php 

class Mercadopago {
 
    public function processPayment($kg) {
        $valor = 5.00;
        $frete =  number_format($valor * $kg,2,",",".");
        return "Pagamento de $frete  via MercadoPago.";
    }
     
}

?>