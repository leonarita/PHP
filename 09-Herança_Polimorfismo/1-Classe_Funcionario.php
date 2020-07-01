<?php

	require_once "1-Classe_Pessoa.php";

	class Funcionario extends Pessoa {

		private $setor;
		private $trabalhando;

		public function mudarTrabalho () {

			$this->trabalhando = ! $this->trabalhando;
		}

		public function receberAumento ($aum) {
			$this->salario += $aum;
		}

		public function getTrabalhando () {
			return $this->trabalhando;
		}

		public function getSalario () {
			return $this->trabalhando;
		}

		public function setSetor ($s) {
			$this->setor = $s;
		}

		public function setSalario ($t) {
			$this->trabalhando = $t;
		}

	}

?>