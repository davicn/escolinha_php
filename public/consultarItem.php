

<html>

<head>
  <title>Consulta de Alunos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div id="navegacao">
    <ul id="nav">

      <li><a href="#">Administrativo</a></li>
      <li><a href="#">Lojinha
          <img class="img-next" src="imgs/next.png" height=20 width=20></img>
        </a>
        <ul>
          <li><a href="#">Cadastrar Item</a></li>
          <li><a href="#">Consultar Item</a></li>
          <li><a href="#">Vender Item</a></li>
          <li><a href="#">Gerar Relatorio Mensal</a></li>
        </ul>
      </li>
      <li><a href="#">Mensalidade
          <img class="img-next2" src="imgs/next.png" height=20 width=20></img>
        </a>
        <ul>
          <li><a href="#">Dar Baixa em Mensalidade</a></li>
          <li><a href="#">Rel. Pagamento do M�s</a></li>
          <li><a href="#">Rel. Inadiplentes do M�s</a></li>
        </ul>
      </li>

      <li><a href="#">Aluno
          <img class="img-next3" src="imgs/next.png" height=20 width=20></img>
        </a>
        <ul>
          <li><a href="#">Criar Aluno</a></li>
          <li><a href="#">Consultar Aluno</a></li>
        </ul>
      </li>

      <li><a href="#">Turma
          <img class="img-next3" src="imgs/next.png" height=20 width=20></img>
        </a>
        <ul>
          <li><a href="#">Consultar Turma</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div id="principal">
    <table class="table" id="tamanho">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Tamanho</th>
          <th scope="col">Descrição</th>
          <th scope="col">A��o</th>
        </tr>
      </thead>
      <tbody>
        <? foreach ($items as $row) : ?>
          <tr>
            <td><? echo $row[0]; ?></td>
            <td><? echo $row[1]; ?></td>
            <td><? echo $row[2]; ?></td>
            <td><? echo $row[3]; ?></td>
            <td><? echo $row[4]; ?></td>
            <td><? echo "-"; ?></td>
          </tr>
        <? endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- jQuery (obrigat�rio para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necess�rio -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>