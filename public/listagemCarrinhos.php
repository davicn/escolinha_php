<?php
 class ListagemCarrinho{
	
	private $itens = [];

        public function __construct() {



    	}

	public function adiciona($item){

		$itens[] = $item;

	}


	public function listagemItens(){

		return $itens;

	}


 }
 
?>