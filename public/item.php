<?php
class Item
{
 private $name;
 private $valor;
 private $quantidade;
 private $descricao;
 private $tamanho;

  function __construct($name, $valor, $quantidade, $tamanho, $descricao) {
   $this->name = $name;
   $this->valor = $valor;
   $this->quantidade = $quantidade;
   $this->descricao = $descricao;
   $this->tamanho = $tamanho;

  }
 
 public Function getNome(){
 	return $this->name;
 }

 public Function getValor(){
 	return $this->valor;
 }

 public Function getQuantidade(){
 	return $this->quantidade;
 }

 public Function getDescricao(){
 	return $this->descricao;
 }

 public Function getTamanho(){
 	return $this->tamanho;
 }
}
?>