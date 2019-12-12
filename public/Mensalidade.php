<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página de Administração</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="inscr.php">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='eventos.php'>Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contatos.php">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.php">Sobre nós</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="admin.php">Página de Administração</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card h-100 text-center">
            <div class="card-header">
                <h2>Página Administrativa - Mensalidades</h2>
            </div>

            <div class="card-group">
                <div class="card  h-100 text-center">
                    <img class="card-img-top" src="../img/mensalidades.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Comfirmar pagamento do Aluno</h5>
                    </div>
                    <div class="card-footer">
                        <a onClick="document.location.href='Baixa.php'" class="btn btn-success">Iniciar</a>
                    </div>
                </div>
            </div>

            <h3>Consultar pagamento dos Alunos</h3>
            <div class="card-group">
                <div class="card  h-100 text-center">
                    <img class="card-img-top" src="../img/imagem6.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Alunos pagantes</h5>
                    </div>
                    <div class="card-footer">
                        <a onClick="document.location.href='Pagantes.php'" class="btn btn-success">Iniciar</a>
                    </div>
                </div>
                <div class="card  h-100 text-center">
                    <img class="card-img-top" src="../img/menino_bola.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Alunos não pagantes</h5>
                    </div>
                    <div class="card-footer">
                        <a onClick="document.location.href='nPagantes.php'"  class="btn btn-success">Iniciar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>
    </div>
    </div>
    <br>
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

</body>

</html>