<?php

	require_once "2-Classe_Video.php";
    require_once "2-Classe_Gafanhoto.php";

	class Visualizacao {

		private $filme;
        private $expectador;

        public function __construct($filme, $expectador)
        {
            $this->filme = $filme;
            $this->expectador = $expectador;

            $this->filme->setView($this->filme->getView() + 1);
            $this->expectador->setTotAssistido($this->expectador->getTotAssistido() + 1);
        }

        public function getFilme()
        {
            return $this->filme;
        }

        public function setFilme($filme)
        {
            $this->filme = $filme;
        }

        public function getExpectador()
        {
            return $this->expectador;
        }

        public function setExpectador($expectador)
        {
            $this->expectador = $expectador;
        }

        public function avaliar() {

            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota) {

            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc) {

            $nova = 0;

            if ($porc <= 20) {
                $nova = 3;
            }
            elseif ($porc <= 50) {
                $nova = 5;
            }
            elseif ($porc <= 90) {
                $nova = 8;
            }
            else {
                $nova = 10;
            }

            $this->filme->setAvaliacao($nova);
        }

	}