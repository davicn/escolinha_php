<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Consulta de Item</title>
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
                <h2>Página Administrativa - Consulta de Item</h2>
            </div>
            <div class="card-body">
                <table class="table" id="tamanho" >
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
<tbody>
     <?php 
     require_once('item.php');
    require_once('listagemCarrinhos.php');
    $item1 = new Item("Meião", "10,00", "5", "médio", "Meião Médio"); 
    $item2 = new Item("Blusão", "20,00", "10", "médio", "Blusão Médio");
    $item3 = new Item("Short", "30,00", "3", "médio", "Short Médio");

   /* $listagemCarrinho = new ListagemCarrinho();
    $listagemCarrinho->adiciona($item1);
    $listagemCarrinho->adiciona($item2);
    $listagemCarrinho->adiciona($item3);
    */
    $items= array();
    $items[] = $item1;
     $items[] = $item2;
      $items[] = $item3;



  
    foreach ($items as $row) {

      echo '<tr>';
      echo '<td>'. $row->getNome() .'</td>';
      echo '<td>'. $row->getValor() .'</td>';
      echo '<td>'. $row->getQuantidade() .'</td>';
      echo '<td>'. $row->getTamanho() .'</td>';
      echo '<td>'. $row->getDescricao() .'</td>';

      echo '<td>' . "<a href='Alteraritem.php'><img src='../img/editar2.PNG'width= 30 alt='Alterar' /></a>" . "|" . "<img src='../img/lixeira.PNG'width= 20 />"  . '</td>';
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