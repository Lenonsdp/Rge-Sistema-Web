<?php

require '/var/www/html/rge/controller/clienteController.php';

if (isset($_POST['action'])) {
	$clienteController = new ClienteController();

	switch ($_POST['action']) {
		case 'criarCobranca':
			$cliente = new Cliente();
			$cliente->setCodigo($_POST['codigo']);
			$cliente->setNome($_POST['nome']);
			$cliente->setKwh($_POST['kwh']);
			$cliente->setTipo($_POST['tipo']);
			$cliente->setMes($_POST['mes']);

			$clienteController->inserirCliente($cliente);
			break;
		case 'filtrar':
			$cliente = new Cliente();
			$cliente->setCodigo($_POST['codigo_busca']);
			$cliente->setNome($_POST['nome_busca']);
			$cliente->setKwh($_POST['kwh_busca']);
			$cliente->setTipo($_POST['tipo_busca']);
			$cliente->setMes($_POST['mes_busca']);

			$clientes = $clienteController->retornarClientes($cliente);
			echo json_encode($clientes);
			break;
	}
}