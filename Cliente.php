<?php
class Cliente extends Conta {
    private $idade;
    private $dataConta;
    
    public function __construct(int $numero,float $saldo, string $nome, int $idade, string $dataConta) {
        parent::__construct($numero, $nome, $saldo);
        $this->definirIdade($idade);
        $this->definirDataConta($dataConta);
    }

    public function definirIdade($idade) {
        $this->idade = $idade;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function definirDataConta($dataConta) {
        $this->dataConta = $dataConta;
    }
    public function retornarDataConta() {
        return $this->dataConta;
    }
    
}
