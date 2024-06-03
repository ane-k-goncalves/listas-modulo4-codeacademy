<?php 
    require_once 'animal.php';

    class Vaca extends Animal {
        public function falar() {
            return "Muuu! \n";
        }
    }
?>