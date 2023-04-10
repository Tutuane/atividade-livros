<?php
    require_once("config.php");
    require_once("../model/Editora.php");

    switch ($_REQUEST["acao"]){
        case 'cadastrarEditora':
            $editora = new Editora();
            $editora ->__setNome($_POST["nome"]);
            $editora ->__setEmail($_POST["email"]);
            $editora ->__setWebsite( $_POST["website"]);
            $editora ->__setTelefone( $_POST["telefone"]);

            $sql = "INSERT INTO editoras (nome, website, email, telefone) 
            VALUES ('{$editora->__getNome()}', '{$editora->__getWebsite()}', '{$editora->__getEmail()}', '{$editora->__getTelefone()}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Editora registrada');</script>";
                print "<script>location.href='../listaEditora.php';</script>";
            }else{
                print "<script>alert('Deu ruim');</script>";
                print "<script>location.href='../listaEditora.php';</script>";
            }
            break;

        case 'editaAutor':
            break;

         case 'excluiAutor':
            break;

        default:
            break;
    }


?>