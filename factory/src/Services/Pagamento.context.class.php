<?php 
// Recebe o Objeto no construtor que tem por obrigatoriedade implementar a interface de pagamento
class PagamentoContext {

    private $paymentGateway;

    public function __construct(PagamentoInterface $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function executePayment($peso) {
        return $this->paymentGateway->processPaymentKg($peso);
    }
}


?>