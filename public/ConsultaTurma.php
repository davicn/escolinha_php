<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Consulta de Turma</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Sobre nós</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " onClick="document.location.href='admin.php'">Página Administrativa</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="card h-100 ">
            <div class="card-header text-center">
                <h2>Página Administrativa - Consulta de Turma</h2>
            </div>
            <div class="card-body">
                <table class="table" id="tamanho" >
  <thead>
  <form id="frmconsulta" name="frmconsulta" action="consultaTurma.php" method="POST">
		<fieldset id ="consulta">
        <label for="exampleFormControlSelect1">Turma por idade</label>
                        <select name = "turma" class="form-control">
                            <option value="0">Sub 6 (00-06)</option>
                            <option value="1">Sub 10 (07-10)</option>
                            <option value="2">Sub 13 (11-13)</option>
                            <option value="3">Sub 16 (14-16)</option>
                            <option value="4">Sub 17 (07-17)</option>
                        </select>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
			</fieldset>
	</form>
<?php 


require_once('aluno.php');
	  
	  
    
$aluno1 = new Aluno("Jose da Silva Oliveiira Junior", "22/03/2005", "Jose da Silva Oliveiira","$(98) 98923-0432",  "Rua Nova","Atacante" , "-"," Manhã", "Sub 17 (07-17)", "-", "-"); 
$aluno2 = new Aluno("Pedro Luid de Sousa Oliveira", "17/04/2015", "Sandra Maria de SOusa Oliveira","(98) 9 8825-3056",  "Rua Maranhão, 726","Goleiro" , "-","Manhã", "Sub 6 (00-06)", "-", "-");
$aluno3 = new Aluno("Cainã Silva de Oliveira", "01/05/2010", "Novarck Silva de Oliveira","(98) 9 88967854",  "Rua Neturno, bloco E, ap 107","-" , "-","Manhã", "Sub 17 (07-17)", "-", "-");

/* $listagemCarrinho = new ListagemCarrinho();
$listagemCarrinho->adiciona($item1);
$listagemCarrinho->adiciona($item2);
$listagemCarrinho->adiciona($item3);
*/
$alunos= array();
$alunos[] = $aluno1;
$alunos[] = $aluno2;
$alunos[] = $aluno3;

#session_start();


$opcao = null;
if($opcao == null) {
	$opcao = $_REQUEST["turma"];
}





    foreach ($alunos as $row) {
        if ($opcao ==0 && $row->getTurma()=='Sub 6 (00-06)'){
        echo '<tr>';
        echo '<td>'. $row->getNomeAluno() .'</td>';
        echo '<td>'. $row->getTurma() .'</td>';
      
        echo '</tr>';
      }
      if ($opcao ==1 && $row->getTurma()=='Sub 10 (07-10)'){
        echo '<tr>';
        echo '<td>'. $row->getNomeAluno() .'</td>';
        echo '<td>'. $row->getTurma() .'</td>';
      
        echo '</tr>';
      }
      if ($opcao ==2 && $row->getTurma()=='Sub 13 (11-13)'){
        echo '<tr>';
        echo '<td>'. $row->getNomeAluno() .'</td>';
        echo '<td>'. $row->getTurma() .'</td>';
      
        echo '</tr>';
      }
      if ($opcao ==3 && $row->getTurma()=='Sub 16 (14-16)'){
        echo '<tr>';
        echo '<td>'. $row->getNomeAluno() .'</td>';
        echo '<td>'. $row->getTurma() .'</td>';
      
        echo '</tr>';
      }
      if ($opcao ==4 && $row->getTurma()=='Sub 17 (07-17)'){
        echo '<tr>';
        echo '<td>'. $row->getNomeAluno() .'</td>';
        echo '<td>'. $row->getTurma() .'</td>';
      
        echo '</tr>';
      }
    }









?>
</tbody>
</table>

            </div>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer py-4 mt-auto bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

</body>

</html>
