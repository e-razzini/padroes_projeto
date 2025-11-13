<?php 

class Dhl {
 
    public function processPayment($kg) {
        // Lógica para calcular o frete com DHL
        $valor = 8.00;
        $frete = number_format($valor * $kg,2,",",".");
        return "Frete calculado para $kg kg valor de R$ $frete via DHL.";
    }
     
}

?>