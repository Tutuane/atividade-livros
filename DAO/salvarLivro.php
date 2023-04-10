<?php

    require_once("config.php");
    require_once("../model/Livro.php");

    switch ($_REQUEST["acao"]){
        case 'cadastrarLivro':
            $livro = new Livro();
            $livro->setTitulo($_POST["titulo"]);
            $livro->setIsbn($_POST["isbn"]);
            $livro->setNPaginas($_POST["nPaginas"]);
            $livro->setAnoPublicacao($_POST["anoPublicacao"]);
            $livro->setNumEdicao($_POST["numEdicao"]);


            $sql = "INSERT INTO livros (titulo, isbn, nPaginas, anoPublicacao, numEdicao) 
            VALUES ('{$livro->getTitulo()}', '{$livro->getIsbn()}', '{$livro->getNPaginas()}', '{$livro->getAnoPublicacao()}', '{$livro->getNumEdicao()}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Livro registrado');</script>";
                print "<script>location.href='../listaLivros.php';</script>";
                
            }else{
                print "<script>alert('Deu ruim');</script>";
                print "<script>location.href='../listaLivros.php';</script>";
            }
            break;

        case 'cadastrarEditora':
            break;

        case 'cadastrarLivro':
            break;

        default:
            break;
    }


?>