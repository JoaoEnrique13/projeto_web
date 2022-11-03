<?php
	require_once("controller/ControllerCadastro.php");

	$controller = new CadastroController();
	$resultado = $controller->excluir($_GET['id']);

?>