<?php   
    require_once 'pessoa.php';
    require_once 'livro.php';


    $pessoa1 = new Pessoa('Ane', 'Rua bb', 'ane@gmail.com', '999999999');
    $livro1 = new Livro('Harry Potter', 'J.K.Rowling', 288);

    $livro1->alugar($pessoa1); 
    $livro1->devolver();

    $pessoa2 = new Pessoa('Luana', 'Rua aa', 'luana@gmail.com', '988888888');
    $livro1->alugar($pessoa2); 
    $livro1->devolver(); 