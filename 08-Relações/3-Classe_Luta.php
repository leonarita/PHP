<?php

	require_once "2-Classe_Lutador.php";

	class Luta {

		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;

		function marcarLuta ($l1, $l2) {

			if ($l1->getCategoria() == $l2->getCategoria() && ($l2 != $l1))
			{
				$this->aprovada = true;
				$this->desafiado = $l1;
				$this->desafiante = $l2;
			}

			else
			{
				$this->aprovada = false;
				$this->desafiado = null;
				$this->desafiante = null;
			}
		}

		function lutar () {

			if ($this->aprovada)
			{
				$this->desafiado->apresentar();
				$this->desafiante->apresentar();

				$vencedor = rand (0, 2);

				switch ($vencedor)
				{
					case 0:
						echo "<p> Empate! </p>";
						$this->desafiado->empatarLuta();
						$this->desafiante->empatarLuta();
						break;

					case 1:
						echo "<p> {$this->desafiado->getNome()} venceu! </p>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
						break;

					case 2:
						echo "<p> {$this->desafiante->getNome()} venceu! </p>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
						break;
				}
			}

			else
			{
				echo "<p> A luta não pode acontecer </p>";
			}
		}

	//Métodos getters
		private function getDesafiado () {
			return $this->desafiado;
		}

		private function getDesafiante () {
			return $this->desafiante;
		}

		private function getRounds () {
			return $this->rounds;
		}

		private function getAprovada () {
			return $this->aprovada;
		}

	//Métodos setters
		private function setDesafiado ($d) {
			$this->desafiado = $d;
		}

		private function setDesafiante ($d) {
			$this->desafiante = $d;
		}

		private function setRounds ($r) {
			$this->rounds = $r;
		}

		private function setAprovada ($a) {
			$this->aprovada = $a;
		}

	}

?>