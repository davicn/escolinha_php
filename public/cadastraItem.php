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
        <div class="collapse navbar-collapse" TogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a data-pagina="#home" class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='inscr.php'>Inscrições</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='galeria.php'>Galeria</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='loja.php'>Loja</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='eventos.php'>Eventos</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#contatos" class="nav-link" href='contatos.php'>Contatos</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#about" class="nav-link" href='about.php'>Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a onClick="document.location.href='login.php'" class="nav-link">Login</a>
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
                <?php
                include "../model/connectDb.php";

                $nome = $_POST['nome'];
                $valor = $_POST['valor'];
                $quantidade = $_POST['quantidade'];
                $descricao = $_POST['descricao'];
                $tamanho = $_POST['tamanho'];

                $sql = "INSERT INTO `itens` (`nome`, `valor`, `quantidade`, `descricao`,`tamanho`) VALUES ('$nome', '$valor', '$quantidade', '$descricao','$tamanho')";
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    echo 'Item inserido!';
                }else{
                    echo 'Item Não inserido!';
                }
                mysqli_free_result($result);
                mysqli_close($conn);

                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nome do Item</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" class="form-control"  name="valor">
                    </div>

                    <div class="form-group">
                        <label >Quantidade</label>
                        <input type="text" class="form-control" name="quantidade">
                    </div>

                    <div class="form-group">
                        <label >Tamanho</label>
                        <input type="text" class="form-control" name="tamanho">
                    </div>
                    <div class="form-group">
                        <label >Descricao</label>
                        <input type="text" class="form-control" name="descricao">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="insert" class="btn btn-success">Enviar</button>
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