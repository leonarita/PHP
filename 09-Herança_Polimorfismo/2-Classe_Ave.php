<?php

	require_once "2-Classe_Animal.php";

	class Ave extends Animal {

		private $corPena;

		function locomover () {

			echo "<p> Voando </p>";
		}

		function alimentar () {

			echo "<p> Comendo frutas </p>";
		}
		
		function emitirSom () {

			echo "<p> Som de ave </p>";
		}

		function fazerNinho () {

			echo "<p> Construindo um ninho </p>";
		}

		public function getCorPena()
        {
            return $this->corPena;
        }

        public function setCorPena($corPena)
        {
            $this->corPena = $corPena;
        }

	}

?>