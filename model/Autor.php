<?php
    class Autor{
        private $nome;
        private $email;
        private $website;
        

        function __setNome($nome){
            $this -> nome = $nome;
        }
        function __setEmail($email){
            $this -> email = $email;
        }
        function __setWebsite($website){
            $this -> website = $website;
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


    }
?>