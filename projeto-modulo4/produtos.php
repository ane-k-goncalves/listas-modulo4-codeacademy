<?php   
    class Produtos {
        private $produto;
        private $valor;

        public function __construct($produto, $valor){
            $this->produto = $produto;
            $this->valor = $valor;
        }
        public function getProduto() {
            return $this->produto;
        }
        public function getValor() {
            return $this->valor;
        }
        public function setProduto() {
            $this->produto = $produto; 
        }
        public function setValor() {
            $this->valor = $valor; 
        }
        

    }