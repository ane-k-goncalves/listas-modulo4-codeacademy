<?php 
    include "animal.php";
    include "gato.php";
    include "porco.php";
    include "vaca.php";
    include "humano.php";
    include "funcionario.php";
    include "balconista.php";
    include "veterinario.php";
    include "vendedor.php";
    include "venda.php";
    include "produtos.php";

    $humano = new Humano("Ane", 22, "Rua:barcelona, 129", 999999999);

    $gatinho = new Gato('Milk', "gato", 4, "branco", 4, "40 centimetros", $humano);

    echo "Informações sobre animais em atendimento: \n";
    echo "A gata " . $gatinho->getNome() . " falou " . $gatinho->falar() . "Infos: peso: " . $gatinho->getPeso() . "kg, cor: " . $gatinho->getCor() . ", nome do seu humano: " . $humano->getNome() ."\n";
     


    $humano2 = new Humano("Laura", 55, "Rua: laranjeiras, 345", 988888888 );

    $vaca = new Vaca("Belinha", "bovina",4, "preta", 250, "1.5 metros", $humano2);


    echo "A vaca " . $vaca->getNome() . " falou " . $vaca->falar() . "Infos: peso: " . $vaca->getPeso() . "kg, cor: " . $vaca->getCor() . ", nome do seu humano: " . $humano2->getNome() ."\n";
     

    $humano3 = new Humano("Marcos", 66, "Rua: laranjeiras, 345", 987777777);

    $porco = new Porco("Sr.Leitão", "suino", 4, "marrom", 70,"50 centimetros", $humano3 );

    echo "O porco " . $porco->getNome() . " falou " . $porco->falar() . "Infos: peso: " . $porco->getPeso() . "kg, cor: " . $porco->getCor() . ", nome do seu humano: " . $humano3->getNome() ."\n";
     

    echo "\nInformações sobre funcionários da clínica veterinária: \n";
    $func = new Balconista ("Marcia", 30,"Rua: blabla, 687", 944444444, 1900);

    echo "O(a) funcionário(a) ". $func->getNome() . " trabalha no cargo de " . $func->cargo() . " e tem o salário de " . $func->getSalario() . " reias. \n";

    $func2 = new Veterinario ("João", 39,"Rua: dfdfs, 97", 944445555, 3000);

    echo "O(a) funcionário(a) ". $func2->getNome() . " trabalha no cargo de " . $func2->cargo() . " e tem o salário de " . $func2->getSalario() . " reias. \n";

    $func3 = new Vendedor ("Pedro", 25,"Rua:bjlkjbcl, 8", 946565656, 1900);

    echo "O(a) funcionário(a) ". $func3->getNome() . " trabalha no cargo de " . $func3->cargo() . " e tem o salário de " . $func3->getSalario() . " reias. \n";


    $prod1 = new Produtos("Ração para gatos", 30);
    $prod2 = new Produtos("Dipinona para gatos e cachorros", 20);
    $prod3 = new Produtos("Ração para vacas", 200);
    $prod4 = new Produtos("Ração para porcos", 80);


    $venda1 = new Venda($humano);
    $venda1->adicionarProduto($prod1);


    echo "O humano " . $humano->getNome() . " comprou os produtos: " ;

    print_r($venda1->getProdutos());

    
    $venda2 = new Venda($humano2);
    $venda2->adicionarProduto($prod3);


    echo "O humano " . $humano2->getNome() . " comprou os produtos: " ;
    print_r($venda2->getProdutos());