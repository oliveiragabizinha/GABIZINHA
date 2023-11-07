<?php
class Cliente {
    private string $nome;
    private string $dataConta;
    private Conta $conta;
    
    public function __construct($nome, $dataConta, $conta) {
        $this->definirNome($nome);
        $this->definirData($dataConta);
        $this->definirConta($conta);
    }

    public function definirNome(string $nome) {
        $this->nome = $nome;
    }
    public function definirData(string $dataConta) {
        $this->dataConta = $dataConta;
    }
    public function definirConta(Conta $conta) {
        $this->conta = $conta;
    }
    public function retornarNome() {
        return $this->nome;
    }
    public function retornarData() {
        return $this->dataNasci;
    }
    public function retornarConta() {
        return $this->conta;
    }
    
}
