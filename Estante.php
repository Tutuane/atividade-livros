<?php
include_once("Livro.php");

class Estante {
	private $livros;
	
	function __construct() {
		$this->livros = array ();
	}
	public function adicionar($novoLivro) {
		array_push($this->livros, $novoLivro);
	}
	public function obterQuantidade() {
		return count ( $this->livros );
	}
	public function pegarLivro($posicao) {
		for($i = 0; $i < count ( $this->livros ); $i ++) {
			$estante = $this->livros[$i];
			if ($posicao == $i) {
				return $estante;
			}
		}
	}
}
?>