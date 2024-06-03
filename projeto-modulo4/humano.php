<?php
    class Humano {
        private $nome;
        private $idade;
        private $endereco;
        private $contato;
        private $animal;

        public function __construct($nome, $idade, $endereco, $contato, $animal) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
            $this->animal = $animal;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getEndereco() {
            return $this->endereco;
        }
        public function getContato() {
            return $this->contato;
        }
        public function getAnimal() {
            return $this->animal;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
        public function setContato($contato) {
            $this->contato = $contato;
        }
        public function setAnimal($animal) {
            $this->animal = $animal;
        }
    }
    