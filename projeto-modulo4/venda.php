<?php


    class Venda {
        private $humano;
        private $produtos = array();

        public function __constructor($humano) {
            $this->humano = $humano;
        }

        public function adicionarProduto(Produtos $produtos) {
            $this->produtos = $produtos; 
        }
        public function getHumano() {
            return $this->humano;
        }
        public function getProdutos() {
            return $this->produtos;
        }
    }