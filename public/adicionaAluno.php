<?php
$nomeAluno = $_POST['nomeAluno'];
$dataNascimento = $_POST['dataNascimento'];
$nomeResponsavel = $_POST['nomeResponsavel'];
$telefoneResponsavel = $_POST['telefoneResponsavel'];
$endereco = $_POST['endereco'];
$posicaoTime = $_POST['posicaoTime'];
$foto = $_POST['foto'];
$turno = $_POST['turno'];
$turma = $_POST['turma'];
$observacaoMedica = $_POST['observacaoMedica'];
$autorizacaoMedica = $_POST['autorizacaoMedica'];

include_once('aluno.php');

if(($nomeAluno != "") and ( $nomeResponsavel != "") and ($telefoneResponsavel  != "") and ( $dataNascimento != "") and ($endereco != "") and ($turno != "") and ($turma != "")){

	aluno = new Aluno($nomeAluno, $dataNascimento, $nomeResponsavel,$telefoneResponsavel,  $endereco,$posicaoTime , $foto, $turno, $turma, $observacaoMedica, $autorizacaoMedica);
 header('Location: admin.php');
	
} else {
	header('Location: cadastraAluno.php');
}

?>