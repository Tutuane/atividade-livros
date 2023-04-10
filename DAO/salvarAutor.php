<?php

    require_once("config.php");
    require_once("../model/Autor.php");

    switch ($_REQUEST["acao"]){
        case 'cadastrarAutor':
            $autor = new Autor();
            $autor->__setNome($_POST["nome"]);
            $autor->__setEmail($_POST["email"]);
            $autor->__setWebsite( $_POST["website"]);

            $sql = "INSERT INTO autores (nome, website, email) 
            VALUES ('{$autor->__getNome()}', '{$autor->__getWebsite()}', '{$autor->__getEmail()}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Autor registrado');</script>";
                print "<script>location.href='../listaAutores.php';</script>";
                
            }else{
                print "<script>alert('Deu ruim');</script>";
                print "<script>location.href='../listaAutores.php';</script>";
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