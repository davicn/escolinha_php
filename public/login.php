<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Escolinha :: Login</title>
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
                    <a class="nav-link " href="login.php">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="card">

            <div class="card-body text-center">
                <img class="mb-4" src="../img/avatar.png" alt="" width="150" height="150">
                <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                <form action="auteticacao.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input class="form-control" id="exampleFormControlInput1" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Senha</label>
                        <input class="form-control" id="exampleFormControlInput1" name="password">
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
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