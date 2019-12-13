<?php
include "../model/connectDb.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title> Escolinha :: Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
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
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card h-100 ">
            <div class="card-header text-center">
                <h2>Conheça nossa loja</h2>
            </div>
            <div class="card-body">
                <?php
                $query = mysqli_query($conn, "select * from itens;");
                $row = mysqli_num_rows($query);
                if ($row > 0){
                    while ($line = mysqli_fetch_array($query)){
                        $nome = $line['nome'];
                        $valor = $line['valor'];
                        $descr = $line['descricao'];

                        echo "
                            <div class='card'>
                                <div class='card-body'>
                                    <img src='...' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>" . $nome . " - R$ " . $valor . "</h5>";
                        echo "<p>" . $descr . "</p>";
                        echo "<a href='#' class='btn btn-success'>Comprar</a>
                        </div>
                      </div></div><br>";
                    }
                }

                /* if ($row > 0) {
                    while ($line = mysqli_fetch_array($query)) {
                        $nome = $line['nome'];
                        $valor = $line['valor'];
                        $descr = $line['descricao'];

                        echo "
                            <div class='card'>
                                <div class='card-body'>
                                    <img src='...' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>" . $nome . " - R$ " . $valor . "</h5>";
                        echo "<p>" . $descr . "</p>";
                        echo "<a href='#' class='btn btn-success'>Comprar</a>
                        </div>
                      </div></div><br>";
                } */

                ?>
            </div>
        </div>
    </div>
</body>
</html>