<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Cadastro de Aluno</title>
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
                    <a class="nav-link " href="#">Página Administrativa</a>
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
                <h2>Página Administrativa - Cadastro de Instrutor</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome completo</label>
                        <input class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Endereço</label>
                        <input class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone</label>
                        <input class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect">Turno</label>
                        <select class="form-control">
                            <option>Manhã</option>
                            <option>Tarde</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Turma por idade</label>
                        <select class="form-control">
                            <option>Sub 10 (07-10)</option>
                            <option>Sub 13 (11-13)</option>
                            <option>Sub 16 (14-16)</option>
                        </select>
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