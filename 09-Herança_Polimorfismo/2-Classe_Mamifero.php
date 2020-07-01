<?php

	require_once "2-Classe_Animal.php";

	class Mamifero extends Animal {

		private $corPelo;

		function locomover () {

			echo "<p> Correndo </p>";
		}

		function alimentar () {

			echo "<p> Mamando </p>";
		}
		
		function emitirSom () {

			echo "<p> Som de mamífero </p>";
		}

		public function getCorPelo()
        {
            return $this->corPelo;
        }

        public function setCorPelo($corPelo)
        {
            $this->corPelo = $corPelo;
        }

	}