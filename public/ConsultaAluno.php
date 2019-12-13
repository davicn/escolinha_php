<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Consulta de Alunos</title>
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
                <h2>Página Administrativa - Consulta de Aluno</h2>
            </div>
            <div class="card-body">
                <table class="table" id="tamanho" >
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Turma</th>
      <th scope="col">Data de Nascimento</th>
       <th scope="col">Nome Responsavel</th>
      <th scope="col">Telefone Responsavel</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
<tbody>
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



  
    foreach ($alunos as $row) {

      echo '<tr>';
      echo '<td>'. $row->getNomeAluno() .'</td>';
      echo '<td>'. $row->getTurma() .'</td>';
      echo '<td>'. $row->getDataNascimento() .'</td>';
      echo '<td>'. $row->getNomeResponsavel() .'</td>';
      echo '<td>'. $row->getTelefoneResponsavel() .'</td>';

      echo '<td>' . "<a href='Alteraraluno.php'><img src='../img/editar2.PNG'width= 20 alt='Alterar' /></a>" . "|" . "<img src='../img/lixeira.PNG'width= 15 />"  . '</td>';
      echo '</tr>';
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