<?php
	include "../model/connectDb.php";

	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$quantidade = $_POST['quantidade'];
	$descricao = $_POST['descricao'];
	$tamanho = $_POST['tamanho'];

	$nome = mysqli_real_escape_string($link, $_REQUEST['nome']);
	$valor = mysqli_real_escape_string($link, $_REQUEST['valor']);
	$quantidade = mysqli_real_escape_string($link, $_REQUEST['quantidade']);
	$descricao = mysqli_real_escape_string($link, $_REQUEST['descri$descricao']);
	$tamanho = mysqli_real_escape_string($link, $_REQUEST['tamanho']);

	$sql = "INSERT INTO itens (nome, valor, quantidade, descricao,tamanho) VALUES ('$nome', '$valor', '$quantidade', '$descricao','$tamanho')";
	mysqli_query($conn,$sql)



?>
