<?php 
    require_once 'animal.php';

    class Gato extends Animal {
        public function falar() {
            return "Miau ";
        }
    }