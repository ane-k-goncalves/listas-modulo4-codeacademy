<?php
    require_once "funcionario.php";

    class Veterinario extends Funcionario {

        public function __construct($nome, $idade, $endereco, $contato, $salario) {
            parent::__construct($nome, $idade, $endereco, $contato, $salario);
        }
        public function cargo() {
            return "Veterinário(a) \n";
        }
    }
?>