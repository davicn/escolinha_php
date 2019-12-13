<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Confirmar pagamento</title>
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
                <h2>Página Administrativa - Confirmar pagamento</h2>
            </div>
            <div class="card-body">
                <table class="table" id="tamanho" >
  <thead>
    <tr>
    <th scope="col">Nome do Aluno</th>
    <th scope="col">Valor da Mensalidade</th>
    <th scope="col">Data de Referencia</th>
    <th scope="col">Pago</th>
    <th scope="col">Confirmar Pagamento</th>
    </tr>
  </thead>
<tbody>
<?php 
    require_once('aluno.php');
    require_once('mensalidade.class.php');
    include 'db_connection.php';

    $conn = OpenCon();


    if(array_key_exists('confirmar',$_POST)){
        confirmar();
    }

    function confirmar() {
        $sql = 'update escolinha.mensalidade
                set pago = 1
                where aluno = ';
    }

    $sql = "select
                alu.idaluno, alu.nome, men.valor, men.mes, men.pago
            from escolinha.mensalidade as men
            inner join escolinha.aluno as alu
            on men.aluno = alu.idaluno
            where men.pago = 0";

    $result = $conn->query($sql); 

    $mensalidades = array();

    while($row = $result->fetch_assoc()){
        $mensalidades[] = new Mensalidade($row['idaluno'], $row['nome'], $row['valor'], $row['mes'], $row['pago']);
    }
  
    foreach ($mensalidades as $mensalidade) {

      echo '<tr>';
      echo '<td>'. $mensalidade->getAluno() .'</td>';
      echo '<td>'. $mensalidade->getValor() .'</td>';
      echo '<td>'. $mensalidade->getMes() .'</td>';
      echo '<td>'. $mensalidade->getPago() .'</td>';
      echo '<td> 
                <form method="post">
                    <button class="btn btn-success" type="submit" 
                    name="confirmar" value="'.$mensalidade->getAluno().'"> Confirmar </button>
                </form> 
            </td>';
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