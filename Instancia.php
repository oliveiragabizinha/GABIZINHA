<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("0641", "Gaby", 40.78);
$cliente = new Cliente("Gabrielle", "02/10/2023", $conta);

echo $cliente->retornarConta()->retornarNumero();
