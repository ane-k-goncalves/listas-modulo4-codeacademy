<?php 
    class Contador {
        private $contador;

        public function __construct() {
            $this->contador = 0;
        }

        public function getContador() {
            return $this->contador;
        }

        public function zerar() {
            $this->contador = 0;
        }

        public function incrementar() {
            $this->contador++;
        }
    }



    $valor1 = new Contador();

    $valor1->incrementar();

    echo "O valor incrementado é: " . $valor1->getContador() . ". \n";

    $valor1->incrementar();

    echo "O valor incrementado duas vezes é: " . $valor1->getContador() . ". \n";

    $valor1->zerar();

    echo "O valor zerado é: " . $valor1->zerar() . ". \n";

    $valor1->incrementar();

    echo "O valor incrementado é: " . $valor1->getContador() . ". \n";
