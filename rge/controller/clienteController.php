<?php

require '/var/www/html/rge/model/DB.class.php';
require '/var/www/html/rge/model/cliente.class.php';

class ClienteController {
	private $db;

	public function __construct() {
		$this->db = new DB();
	}

	public function inserirCliente($cliente) {
		$this->db->inserirDados('INSERT INTO cliente (codigo, nome, Kwh, tipo, mes) VALUES("'. $cliente->getCodigo() .'", "'. $cliente->getNome() .'", "'. $cliente->getKwh() .'", "'. $cliente->getTipo() .'", "'. $cliente->getMes() .'" )');
	
		// $tipo = [0.8, 0.9, 1];
		// $nome = ['João', 'Pedro', 'Maria', 'Lenon', 'Jair', 'Messias', 'Bolsonaro', 'Patriota', 'Honesto', 'Ficha', 'Limpa'];
		// for ($i = 1; $i < 50; $i++) {
		// 	$this->db->inserirDados('INSERT INTO cliente (codigo, nome, Kwh, tipo, mes) VALUES("'. $i . strtoupper(substr($nome[mt_rand(0, count($nome) - 1)], 0, 2)) .'", "'. $nome[mt_rand(0, count($nome) - 1)] .'", "'. mt_rand(1, 100) .'", "'. $tipo[mt_rand(0, 2)] .'", "'. mt_rand(1, 12) .'" )');
		// }
	}

	public function retornarClientes($cliente) {
		$sql = 'SELECT * FROM cliente ';
		$filtro = array();

		if ($cliente->getCodigo() != '') {
			$filtro[] = 'codigo LIKE "%' . $cliente->getCodigo() . '%"';
		}

		if ($cliente->getNome() != '') {
			$filtro[] = 'nome LIKE "%' . $cliente->getNome() . '%"';
		}

		if ($cliente->getKwh() != '') {
			$filtro[] = 'Kwh = ' . $cliente->getKwh();
		}

		if ($cliente->getTipo() > 0) {
			$filtro[] = 'tipo = ' . $cliente->getTipo();
		}

		if ($cliente->getMes() > 0 && $cliente->getMes() < 13) {
			$filtro[] = 'mes = ' . $cliente->getMes();
		}

		if (count($filtro) > 0) {
			$sql .= 'WHERE ' . implode(' AND ', $filtro);
		}

		return $this->db->retornarDados($sql);
	}
}
?>