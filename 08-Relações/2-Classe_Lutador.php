<?php

	class Lutador {

		private $nome;
		private $nacionalidade;
		private $idade, $altura, $peso;
		private $categoria, $vitorias, $derrotas, $empates;

		function apresentar () {

			echo "<p>----------------------------------------------------------------------------------------------------------------</p>";
			echo "<p> CHEGOU A HORA! O lutador {$this->getNome()} veio diretamente de {$this->getNacionalidade()}, tem {$this->getIdade()} anos e pesa {$this->getPeso()} Kg.";
			echo "<br> Ele tem {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates. </p>";
		}

		function status () {

			echo "<p>----------------------------------------------------------------------------------------------------------------</p>";			
			echo "<p> {$this->getNome()} é um peso {$this->getCategoria()} que já ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} vezes e emparou {$this->getEmpates()} vezes. </p>";
		}

		function ganharLuta () {
			$this->setVitorias ($this->getVitorias() + 1);
		}

		function perderLuta () {
			$this->setDerrotas ($this->getDerrotas() + 1);
		}

		function empatarLuta () {
			$this->setEmpates ($this->getEmpates() + 1);
		}

	//Método Construtor
		function __construct ($no, $na, $id, $al, $pe, $vi, $de, $em) {

			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->peso = $pe;
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empates = $em;
		}

	//Métodos getters
		function getNome () {
			return $this->nome;
		}

		private function getNacionalidade () {
			return $this->nacionalidade;
		}

		private function getIdade () {
			return $this->idade;
		}

		private function getAltura () {
			return $this->altura;
		}

		private function getPeso () {
			return $this->peso;
		}

		private function getVitorias () {
			return $this->vitorias;
		}

		private function getDerrotas () {
			return $this->derrotas;
		}

		private function getEmpates () {
			return $this->empates;
		}

		function getCategoria () {
			return $this->categoria;
		}

	//Métodos setters
		private function setNome ($n) {
			$this->nome = $n;
		}

		private function setLigado ($n) {
			$this->nacionalidade = $n;
		}

		private function setIdade ($i) {
			$this->idade = $i;
		}

		private function setAltura ($a) {
			$this->altura = $a;
		}

		private function setPeso ($p) {
			$this->peso = $p;
			$this->setCategoria();
		}

		private function setVitorias ($v) {
			$this->vitorias = $v;
		}

		private function setDerrotas ($d) {
			$this->derrotas = $d;
		}

		private function setEmpates ($e) {
			$this->empates = $e;
		}

		private function setCategoria () {
			
			if ($this->peso < 52.2) {
				$this->categoria = "Inválido";
			}
			elseif ($this->peso < 70.3) {
				$this->categoria = "Leve";
			}
			elseif ($this->peso < 83.9) {
				$this->categoria = "Médio";
			}
			elseif ($this->peso < 120.2) {
				$this->categoria = "Pesado";
			}
			else {
				$this->categoria = "Inválido";
			}
		}

	}

?>