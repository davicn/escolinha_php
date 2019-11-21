<?php
$name = $_POST['nome'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$tamanho = $_POST['tamanho'];

include_once('item.php');
include_once('listagemCarrinhos.php');

print_r ($tamanho);
if(($name != "") and ($valor != "") and ($quantidade != "") and ($descricao != "" ) and ($tamanho != "")){
	$carrinhoItems = new listagemCarrinho();
	$item = new Item($name, $valor, $quantidade, $tamanho, $descricao);
	
	$carrinhoItems->Adiciona($item);
	console.log($item->getNome());
	$name = "";
	$valor = "";
	$quantidade = "";
	$descricao = "";
	$tamanho = "";
	echo "<script>console.log({$item->getNome()})</script>";

	 header('Location: admin.php');
	
} else {
	header('Location: cadastraAluno.php');
}

?>