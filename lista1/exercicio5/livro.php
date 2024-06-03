<?php

    class Livro {
        private $nome;
        private $autor;
        private $numeroPaginas;
        private $disponivel;
        private $alugadoPor;

        public function __construct($nome, $autor, $numeroPaginas) {
            $this->nome = $nome;
            $this->autor = $autor;
            $this->numeroPaginas = $numeroPaginas;
            $this->disponivel = true;
            $this->alugadoPor = null;
        }

       
        public function getNome() {
            return $this->nome;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getNumeroPaginas() {
            return $this->numeroPaginas;
        }

        public function isDisponivel() {
            return $this->disponivel;
        }

        public function getAlugadoPor() {
            return $this->alugadoPor;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function setNumeroPaginas($numeroPaginas) {
            $this->numeroPaginas = $numeroPaginas;
        }

        public function setDisponivel($disponivel) {
            $this->disponivel = $disponivel;
        }

        public function setAlugadoPor($alugadoPor) {
            $this->alugadoPor = $alugadoPor;
        }

        
        public function alugar($pessoa) {
            if ($this->disponivel) {
                $this->disponivel = false;
                $this->alugadoPor = $pessoa;
                echo "{$this->nome} foi alugado por {$pessoa->getNome()}.\n";
            } else {
                echo "{$this->nome} não está disponível para aluguel.\n";
            }
        }

       
        public function devolver() {
            if (!$this->disponivel) {
                echo "{$this->nome} foi devolvido por {$this->alugadoPor->getNome()}.\n";
                $this->disponivel = true;
                $this->alugadoPor = null; 
            } else {
                echo "{$this->nome} não está alugado.\n";
            }
        }
    }
?>
