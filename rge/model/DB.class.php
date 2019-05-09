<?php

require '/var/www/html/rge/config.php';

class DB {
	private $conexao;

	public function __construct() {
		$this->conexao = new mysqli(HOST, USER, PASS, BANCO);
		$this->conexao->set_charset('utf8');
	}

	public function inserirDados($insert) {
		$this->conexao->query($insert);
	}

	public function retornarDados($select) {
		$res = $this->conexao->query($select);

		$retorno = $dados = array();

		while ($retorno = $res->fetch_assoc()) {
			$dados[] = $retorno;
		}

		return $dados;
	}

	public function atualizarDados($update) {
		$this->conexao->query($update);
	}

	public function excluirDados($delete) {
		$this->conexao->query($delete);
	}	
}

?>



