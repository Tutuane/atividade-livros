<?php

include_once("Autor.php");
include_once("Editora.php");
    class Livro{
        public $titulo;
        public $isbn;
        public $nPaginas;
        public $anoPublicacao;
        public $numEdicao;
        public $autor;
        public Editora $editora;

        function __construct(){
            $this -> autor = array();
        }

        public function setTitulo($novoTitulo) {
            $this->titulo = $novoTitulo;
        }
        public function setIsbn($novoIsbn) {
            $this->isbn = $novoIsbn;
        }
        public function setNPaginas($novoNPaginas) {
            $this->nPaginas = $novoNPaginas;
        }
        public function setAnoPublicacao($novoAnoPublicacao) {
            $this->anoPublicacao = $novoAnoPublicacao;
        }
        public function setNumEdicao($novoNumEdicao) {
            $this->numEdicao = $novoNumEdicao;
        }
        public function adicionarAutor($novoAutor) {
            array_push ( $this->autor, $novoAutor );
        }
        public function setEditora($novoEditora) {
            $this->editora = $novoEditora;
        }
        

        
        public function getTitulo() {
            return $this->titulo;
        }
        public function getIsbn() {
            return $this->isbn;
        }
        public function getNPaginas() {
            return $this->nPaginas;
        }
        public function getAnoPublicacao() {
            return $this->anoPublicacao;
        }
        public function getNumEdicao() {
            return $this->numEdicao;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function getEditora() {
            return $this->editora;
        }
        
    }
?>