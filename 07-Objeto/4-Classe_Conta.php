<?php

	class ContaBanco {

		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		public function __construct () {

			$this->setSaldo(0);
			$this->setStatus(false);

			echo "<p> Conta criada com sucesso! </p>";
		}

		public function abrirConta ($t) {

			$this->setTipo($t);
			$this->setStatus(true);

			if ($t == "CC")
				$this->setSaldo(50);
			elseif ($t == "CP")
				$this->saldo = 150;
		}

		public function fecharConta () {

			if ($this->getSaldo() > 0)
				echo "<p> A conta ainda possui dinheiro, não é possível fechá-la! </p>";

			elseif ($this->getSaldo() < 0)
				echo "<p> A conta está em débito, impossível encerrar! </p>";

			else {
				$this->setStatus(false);
				echo "<p> Conta de {$this->getDono()} fechada! </p>";
			}
		}

		public function depositar ($v) {

			if ($this->getStatus()){

				$this->setSaldo($this->getSaldo() + $v);
				echo "<p> Depósito de R$$v na conta de {$this->getDono()} </p>";
			}
			else
				echo "<p> Conta fechada! </p>";
		}

		public function sacar ($v) {

			if ($this->getStatus()) {

				if ($this->getSaldo() > $v) {

					$this->setSaldo($this->getSaldo() - $v);
					echo "<p> Saque de R$$v autorizado na conta de {$this->getDono()} </p>";
				}
				else
					echo "<p> Saldo insuficiente para saque! </p>";
			}
			else
				echo "<p> Conta fechada! </p>";
		}

		public function pagarMensal() {

			if ($this->getTipo() == "CC")
				$v = 12;
			elseif ($this->getTipo() == "CP")
				$v = 12;
			
			if ($this->getStatus()) {

				$this->setSaldo($this->getSaldo() - $v);
				echo "<p> Mensalidade de R$$v debitada na conta de {$this->getDono()} </p>";
			}
			else
				echo "<p> Conta não pode ser cobrada por fechada! </p>";
		}

		function getNumConta () {

			return $this->numConta;
		}

		function getTipo () {

			return $this->tipo;
		}

		function getDono () {

			return $this->dono;
		}

		function getSaldo () {

			return $this->saldo;
		}

		function getStatus () {

			return $this->status;
		}

		function setNumConta ($n) {

			$this->numConta = $n;
		}

		function setTipo ($t) {

			$this->tipo = $t;
		}

		function setDono ($d) {

			$this->dono = $d;
		}

		function setSaldo ($s) {

			$this->saldo = $s;
		}

		function setStatus ($s) {

			$this->status = $s;
		}
	}

?>