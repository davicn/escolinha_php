<?php
$name = $_POST['nome'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$tamanho = $_POST['tamanho'];

include_once('item.php');
include_once('listagemCarrinhos.php');

print $tamanho;
echo $tamanho;

if(($name != "") and ($valor != "") and ($quantidade != "") and ($descricao != "" ) and ($tamanho != "")){
	$carrinhoItems = new listagemCarrinho();
	$item = new Item($name, $valor, $quantidade, $tamanho, $descricao);
	
	$carrinhoItems->Adiciona($item);
	echo $item->getNome();
	/*
	$name = "";
	$valor = "";
	$quantidade = "";
	$descricao = "";
	$tamanho = "";
*/

	 header('Location: admin.php');
	
} else {
	header('Location: cadastraItem.php');
}

?>