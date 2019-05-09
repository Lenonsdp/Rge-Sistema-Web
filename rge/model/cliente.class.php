<?php
class Cliente {
	private $codigo;
	private $nome;
	private $kwh;
	private $tipo;
	private $mes;
	
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setKwh($kwh) {
		$this->kwh = $kwh;
	}

	public function getKwh() {
		return $this->kwh;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setMes($mes) {
		$this->mes = $mes;
	}

	public function getMes() {
		return $this->mes;
	}

}

?>