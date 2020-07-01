<?php

	require_once "2-Interface_AcoesVideo.php";

	class Video implements AcoesVideo {

		private $titulo;
		private $avaliacao;
		private $view;
		private $curtidas;
		private $reproduzindo;

		public function play() {
			$this->reproduzindo = true;
		}

		public function pause() {
			$this->reproduzindo = false;
		}

		public function like() {
			$this->curtidas ++;

		}

		public function __construct ($t) {

			$this->titulo = $t;
			$this->avaliacao = 1;
			$this->view = 0;
			$this->curtidas = 0;
			$this->reproduzindo = false;
		}

		public function getTitulo()
        {
            return $this->titulo;
        }

        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function getAvaliacao()
        {
            return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
        	$media = ($this->avaliacao + $avaliacao) / 2;
            $this->avaliacao = $media;
        }

        public function getView()
        {
            return $this->view;
        }

        public function setView($view)
        {
            $this->view = $view;
        }

        public function getCurtidas()
        {
            return $this->curtidas;
        }

        public function setCurtidas($curtidas)
        {
            $this->curtidas = $curtidas;
        }

        public function getReproduzindo()
        {
            return $this->reproduzindo;
        }

        public function setReproduzindo($reproduzindo)
        {
            $this->reproduzindo = $reproduzindo;
        }

	}