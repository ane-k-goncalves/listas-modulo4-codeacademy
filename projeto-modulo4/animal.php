<?php


    class Animal  {
        private $nome;
        private $raca;
        private $quantPatas;
        private $cor;
        private $peso;
        private $tamanho;
        
        public function __construct($nome, $raca, $quantPatas, $cor, $peso, $tamanho) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->quantPatas = $quantPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
            
        }

        public function getNome() {
            return $this->nome;
        }
        public function getRaca() {
            return $this->raca;
        }
        public function getQuantPatas() {
            return $this->quantPatas;
        }
        public function getCor() {
            return $this->cor;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getTamanho() {
            return $this->tamanho;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setRaca($raca) {
            $this->raca = $raca;
        }
        public function setQuantPatas($quantPatas) {
            $this->quantPatas = $quantPatas;
        }
        public function setCor($cor) {
            $this->cor = $cor;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }
        public function setTamanho($tamanho) {
            $this->tamanho = $tamanho;
        }
        
        public function falar() {

        }
        
    }