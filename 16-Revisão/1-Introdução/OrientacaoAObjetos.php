<?php

class ContaBancaria {

	private $banco;
	private $nomeTitular="Gustavo Fraga";
	private $numeroAgencia = "4367";
	private $numeroConta;
	private $saldo = 1000.00;
	
	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo) {
		$this->banco = $banco;
		$this->nomeTitular = $nomeTitular;
		$this->numeroAgencia = $numeroAgencia;
		$this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
	}

	public function obterSaldo() {
		return 'Saldo atual: R$' . $this->saldo;
	}

	public function depositar($valor) {
		$this->saldo += $valor;
	}

	public function sacar($valor) {
		$this->saldo -= $valor;
	}
}

$conta = new ContaBancaria('Banco do Brasil', 'Leo Narita', '8244', '57344-10', 0);
var_dump($conta->saldo);

echo $conta->obterSaldo();
$conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;

$conta->sacar(150.00);
echo $conta->obterSaldo();

echo PHP_EOL;
