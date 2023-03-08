<?php
    include_once("Autor.php");
    include_once("Edirora.php");
    include_once("Livro.php");
    include_once("Estante.php");

    $editora1 = new Editora();
    $editora1->nome = 'Aleph';
    $editora1->email = 'editoraaleph@email.com';
    $editora1->website = 'editoraaleph.com';
    $editora1->telefone = '47999999999';


    $editora2 = new Editora();
    $editora2->nome = 'Harper Collins';
    $editora2->email = 'editoraharpercollins@email.com';
    $editora2->website = 'editoraharpercollins.com';
    $editora2->telefone = '478888888888';

    $autor1 = new Autor();
    $autor1->nome = 'Frank Herbert';
    $autor1->email = 'frank@email.com';
    $autor1->website = 'franksite.com';

    $autor2 = new Autor();
    $autor2->nome = 'Pirula';
    $autor2->email = 'emaildopirula@email.com';
    $autor2->website = 'pirula.org.com.br';

    $autor3 = new Autor();
    $autor3->nome = 'Reinaldo José Lopes';
    $autor3->email = 'reinaldolopes@email.com';
    $autor3->website = 'reinaldolopes.com';

    $livro1=new Livro();
    $livro1->titulo = 'DUNA';
    $livro1->isbn = '978-85-7657-314-5';
    $livro1->nPaginas = '680';
    $livro1->anoPublicacao = '1965';
    $livro1->numEdicao = '2';
    $livro1->editora = $editora1;
    $livro1->autor = $autor1;

    $livro2=new Livro();
    $livro2->titulo = 'Darwin sem frescura';
    $livro2->isbn = '978-85-9508-469-8';
    $livro2->nPaginas = '240';
    $livro2->anoPublicacao = '2019';
    $livro2->numEdicao = '1';
    $livro2->editora = $editora2;
    $livro2->autor = $autor2;
    $livro2->autor = $autor3;

    
    $estante = new Estante();
    $estante->adicionar($livro1);
    $estante->adicionar($livro2);


?>