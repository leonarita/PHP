<?php
	
	class Caneta {

		private $modelo;
		private $ponta;
		private $cor;
		private $tampada;

		public function Caneta ($m, $c, $p) {

			$this->modelo = $m;
			$this->cor = $c;
			$this->ponta = $p;
			$this->tampar();
		}

		public function setModelo ($m) {

			$this->modelo = $m;

		}

		public function getModelo () {

			return $this->modelo;
		}

		public function setPonta ($p) {

			$this->ponta = $p;

		}

		public function getPonta () {

			return $this->ponta;
		}

		public function tampar () {

			$this->tampada = true;
		}

		public function destampar () {

			$this->tampada = false;
		}
	}

?>