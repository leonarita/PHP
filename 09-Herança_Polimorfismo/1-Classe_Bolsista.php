<?php

	require_once "1-Classe_Aluno.php";

	class Bolsista extends Aluno {

		private $bolsa;

		public function renovarBolsa () {

			echo "<p> Bolsa renovada! </p>";
		}

		public function pagarMensalidade () {

			echo "<p> {$this->nome} é bolsista! Paga com desconto... </p>";
		}

		function getBolsa () {
			return $this->bolsa;
		}

		function setBolsa ($b) {
			$this->bolsa = $b;
		}

	}

?>