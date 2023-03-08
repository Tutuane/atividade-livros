<?php
    class Editora{
        public $nome;
        public $email;
        public $website;
        public $telefone;

        function __construct($nome, $email, $website, $telefone){
            $this->$nome=$nome;
            $this->$email=$email;
            $this->$$website=$website;
            $this->$telefone=$telefone;
        }

        function __setNome($nome){
            $this -> $nome = $nome;
        }
        function __setEmail($email){
            $this -> $email = $email;
        }
        function __setWebsite($website){
            $this -> $website = $website;
        }
        function __setTelefone($telefone){
            $this -> $telefone = $telefone;
        }

        function __getNome(){
            return $this -> nome;
        }
        function __getEmail(){
            return $this -> email;
        }
        function __getWebsite(){
            return $this -> website;
        }
        function __getTelefone(){
            return $this -> telefone;
        }

    }
?>