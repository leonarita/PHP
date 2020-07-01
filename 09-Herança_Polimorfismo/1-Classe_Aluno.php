<?php

	require_once "1-Classe_Pessoa.php";

	class ALuno extends Pessoa {

		private $matr;
		private $curso;

		public function cancelarMatricula () {

			echo "<p> Matrícula será cancelada! </p>";
		}

		public function pagarMensalidade () {

			echo "<p> Pagando mensalidade de {$this->nome} </p>";
		}

		public function getMatr () {
			return $this->matr;
		}

		public function getCurso () {
			return $this->curso;
		}

		public function setMatr ($m) {
			$this->matr = $m;
		}

		public function setCurso ($c) {
			$this->curso = $c;
		}

	}

?>