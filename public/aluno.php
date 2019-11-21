<?php
class Aluno
{
 private $nomeAluno;
 private $dataNascimento;
 private $nomeResponsavel;
 private $telefoneResponsavel;
 private $endereco;
  private $posicaoTime;
 private $foto;
 private $turno;
  private $turma;
 private $observacaoMedica;
 private $autorizacaoMedica;


  function __construct( $nomeAluno, $dataNascimento, $nomeResponsavel,$telefoneResponsavel,  $endereco,$posicaoTime , $foto, $turno, $turma, $observacaoMedica, $autorizacaoMedica) {

  	$this->nomeAluno = $nomeAluno;
  	$this->dataNascimento = $dataNascimento;
  	$this->nomeResponsavel = $nomeResponsavel;
  	$this->telefoneResponsavel = $telefoneResponsavel;
  	$this->endereco = $endereco;
  $this->posicaoTime  = $posicaoTime;
  $this->foto = $foto;
 $this->turno = $turno;
 $this->turma = $turma;
 $this->observacaoMedica = $observacaoMedica;
 $this->autorizacaoMedica  = $autorizacaoMedica; 


  }
  public function getNomeAluno(){
  	return $this->nomeAluno;
  } 
  public function getDataNascimento(){
  	return $this->dataNascimento;
  }
  public function getNomeResponsavel(){
  	return $this->nomeResponsavel;
  }
  public function getTelefoneResponsavel(){
  	return $this->nomeResponsavel;
  }
  public function getEndereco(){
  	return $this->endereco;
  }
  public function getPosicaoTime(){
  	return $this->posicaoTime;
  }
  public function getFoto(){
  	return $this->foto;
  }
  public function getTurno(){
  	return $this->turno;
  }
  public function getTurma(){
  	return $this->turma;
  }
  public function getObservacaoMedica(){
  	return $this->observacaoMedica;
  }
  public function getAutorizacaoMedica(){
  	return $this->autorizacaoMedica;
  }

}
?>