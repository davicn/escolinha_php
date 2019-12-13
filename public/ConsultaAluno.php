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
      <th scope="col">ID</th>
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
     include 'db_connection.php';
     $conn = OpenCon();
    $count=1;
    $sel_query="select * from aluno left join turma on turma.idturma = aluno.idturma ORDER BY nome asc;";
    $result = mysqli_query($conn,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["nome"]; ?></td>
    <td align="center"> <?php echo $row["categoria"]; ?> </td>
    <td align="center"><?php echo $row["dataNasc"]; ?></td>
    <td align="center"><?php echo $row["responsavel"]; ?></td>
    <td align="center"><?php echo $row["telefone"]; ?></td>
    <td>
      <a href='Alteraraluno.php?id=<?php echo $row["idaluno"]; ?>'><img src='../img/editar2.PNG'width= 20 alt='Alterar'/></a> | <a href='deletarAluno.php?id=<?php echo $row["idaluno"]; ?>'><img src='../img/lixeira.PNG'width= 15 /></a>
      </td>
    </tr>

    <?php $count++; } 
    CloseCon($conn);
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