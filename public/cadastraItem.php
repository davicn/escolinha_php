<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Cadastro de Item</title>
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
                <h2>Página Administrativa - Cadastro de Turma</h2>
            </div>
            <div class="card-body">
                <form action="adicionaItem.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome do Item</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Valor</label>
                        <input class="form-control" id="exampleFormControlInput1" name="valor">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Quantidade</label>
                        <input class="form-control" id="exampleFormControlInput1" name="quantidade">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tamanho</label>
                        <input class="form-control" id="exampleFormControlInput1" name="tamanho">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descricao</label>
                        <input class="form-control" id="exampleFormControlInput1" name="descricao">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </form>
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