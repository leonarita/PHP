<?php

	require_once "2-Classe_Animal.php";

	class Peixe extends Animal {

		private $corEscama;

		function locomover () {

			echo "<p> Nadando </p>";
		}

		function alimentar () {

			echo "<p> Comendo substâncias </p>";
		}
		
		function emitirSom () {

			echo "<p> glub glub </p>";
		}

		function soltarBolha () {

			echo "<p> Soltou uma bolha </p>";
		}

        public function getCorEscama()
        {
            return $this->corEscama;
        }
        
        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
        }

	}