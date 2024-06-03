<?php
    require_once "funcionario.php";

    class Balconista extends Funcionario {

        public function __construct($nome, $idade, $endereco, $contato, $salario) {
            parent::__construct($nome, $idade, $endereco, $contato, $salario);
        }
        public function cargo() {
            return "Balconista \n";
        }
    }
?>