<?php 
    require_once 'humano.php';

    class Funcionario extends Humano {
        private $salario;

        public function __construct($nome, $idade, $endereco, $contato, $salario) {
            parent::__construct($nome, $idade, $endereco, $contato);
            $this->salario = $salario;
        }
        
    }