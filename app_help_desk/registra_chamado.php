<?php

	session_start();

	//criando uma string do form
	$titulo = str_replace(';', '-', $_POST['titulo']);
	$categoria = str_replace(';', '-', $_POST['categoria']);
	$descricao = str_replace(';', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . ';' . $titulo . ';' . $categoria . ';' . $descricao . PHP_EOL;

	//imprimindo em um arquivo .txt
	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>