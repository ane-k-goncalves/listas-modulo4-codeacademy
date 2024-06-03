<?php
    require_once 'humano.php';

    class Pessoa {
        private $nome;
        private $endereco;
        private $email;
        private $telefone;
        
        public function __construct($nome, $endereco, $email, $telefone) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        public function getNome() {
            return $this->nome;
        }
        
        public function getEndereco() {
            return $this->endereco;
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function getTelefone() {
            return $this->telefone;
        }
        
       
        public function setNome($nome) {
            $this->nome = $nome;
          }
        
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        
    }